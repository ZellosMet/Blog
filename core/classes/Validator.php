<?

class Validator
{
    protected $errors = [];
    protected $ruls_list = ['required', 'min', 'max'];
    protected $message = [];

    public function Validate($data = [], $rules = [])
    {
        foreach ($data as $fieldname => $fildvalue) 
        {
            if(in_array($fieldname, array_keys($rules)))
                Dump($fieldname);
        }
        
        return $this;
    }
}

?>