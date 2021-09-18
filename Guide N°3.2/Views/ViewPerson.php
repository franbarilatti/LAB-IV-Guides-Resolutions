<?php
	namespace Views;
    use Models\Person as Person;

	class viewPerson{
		private $person;
	

        public function __construct($person){
            $this->person = $person;
        }

        public function getView(){
            return '
            <fieldset>
            <legend>YOUR BASIC INFO</legend>
            <table>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>'.$this->person->getFullName().'</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>'.$this->person->getEmail().'</td>
                    </tr>
                    <tr>
                        <td>Passwor</td>
                        <td>'.$this->person->getPassword().'</td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td>'.$this->person->getBirthday().'</td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>'.$this->person->getSex().'</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <fieldset>
            <legend>YOUR PROFILE</legend>
            <tr>
                <td>About You</td>
                <td>'.$this->person->getAboutYou().'</td>
            </tr>
            <tr>
                <td>Role</td>
                <td>'.$this->person->getRole().'</td>
            </tr>
            <tr>
                <td>Interest</td>
                <td>'.implode(" ",$this->person->getInterest()).'</td>
            </tr>
        </fieldset>
        ';
        }
    }
?>
