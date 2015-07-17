<?php

namespace PrintNode;

class EmailPassword implements Credentials
{

	private $email;
	private $password;
	private $apiurl = "https://apidev.printnode.com/";

	public function __construct($email,$password)
	{
		$this->email=$email;
		$this->password=$password;
	}

	public function __toString()
	{
		return $this->email . ':' . $this->password;
	}

    public function __set($propertyName, $value)
    {
        if (!property_exists($this, $propertyName)) {

            throw new \InvalidArgumentException(
                sprintf(
                    '%s does not have a property named %s',
                    get_class($this),
                    $propertyName
                )
            );
        }

        $this->$propertyName = $value;
    }

    public function __get($propertyName)
    {
        if (!property_exists($this, $propertyName)) {

            throw new \InvalidArgumentException(
                sprintf(
                    '%s does not have a property named %s',
                    get_class($this),
                    $propertyName
                )
            );
        }

        return $this->$propertyName;
    }

}
?>
