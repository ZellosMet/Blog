<?

class Validator
{
    protected $errors = [];
    protected $validators_list = ['required', 'min', 'max'];
    protected $messages = [
        'required' => 'The :fieldname: field is required',
        'min' => 'The :fieldname: field must be a minimun :rule_value: characters',
        'max' => 'The :fieldname: field must be a maximum :rule_value: characters'
    ];

    public function Validate($data = [], $rules = [])
    {
        foreach ($data as $fieldname => $fildvalue) 
        {
            if(in_array($fieldname, array_keys($rules)))
                $this->CheckField(['fieldname' => $fieldname, 'value' => $fildvalue, 'ruls' => $rules[$fieldname]]);
        }  
        return $this;
    }

    protected function CheckField($field)
    {
        foreach ($field['ruls'] as $rule => $rule_value) 
        {
            if(in_array($rule, $this->validators_list))
            {
                if(!call_user_func_array([$this, $rule], [$field['value'], $rule_value]))
                {
                    $err_str = str_replace([":fieldname:", ":rule_value:"], [$field['fieldname'], $rule_value], $this->messages[$rule]);
                    $this->AddError($field['fieldname'], $err_str);
                }
            }
        }        
    }
    //Функция для сбора ошибок
    protected function AddError($fieldname, $error)
    {
        $this->errors[$fieldname][] = $error;
    }
    //Функция проверки на заполненость поля
    protected function Required($value)
    {
        return !empty(trim($value));
    }
    //Функция на проверку минимальной длины
    protected function Min($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }
    //Функция на проверку максимальной длины
    protected function Max($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') <= $rule_value;
    }
    //Проверка на наличие ошибок
    public function HasErrors()
    {
        return !empty($this->errors);
    }

    public function LisrErrors($fieldname)
    {
        $errors_list = "<div class='invalid-feedback d-block'> <ul class='list-unstyled'>";
        if(isset($this->errors[$fieldname]))
        {
            foreach ($this->errors[$fieldname] as $err)             
                $errors_list .= "<li>{$err}</li>";            
            $errors_list .= '</div></ul>';
        }
        return $errors_list;
    }
}

?>