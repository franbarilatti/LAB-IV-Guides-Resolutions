<?php
	namespace Models;
	require_once "Config/Autoload.php";

	class Person{
		private $fullName;
		private $email;
		private $password;
		private $birthday;
		private $sex;
		private $aboutYou;
		private $role;
		private $interest;

		public function __construct($fullName,$email,$password,$birthday,$sex,$aboutYou,$role,$interest){
			$this->fullname = $fullName;
			$this->email = $email;
			$this->password = $password;
			$this->birthdat = $birthday;
			$this->$sex = $sex;
			$this->aboutYou = $aboutYou;
			$this->role = $role;
			$this->interest = $interest; 
		}

		

		/**
		 * Get the value of fullName
		 */ 
		public function getFullName()
		{
				return $this->fullName;
		}

		/**
		 * Get the value of email
		 */ 
		public function getEmail()
		{
				return $this->email;
		}

		/**
		 * Get the value of password
		 */ 
		public function getPassword()
		{
				return $this->password;
		}

		/**
		 * Get the value of birthday
		 */ 
		public function getBirthday()
		{
				return $this->birthday;
		}

		/**
		 * Get the value of sex
		 */ 
		public function getSex()
		{
				return $this->sex;
		}

		/**
		 * Get the value of aboutYou
		 */ 
		public function getAboutYou()
		{
				return $this->aboutYou;
		}

		/**
		 * Get the value of role
		 */ 
		public function getRole()
		{
				return $this->role;
		}

		/**
		 * Get the value of interest
		 */ 
		public function getInterest()
		{
				return $this->interest;
		}

		/**
		 * Set the value of fullName
		 *
		 * @return  self
		 */ 
		public function setFullName($fullName)
		{
				$this->fullName = $fullName;

				return $this;
		}

		/**
		 * Set the value of email
		 *
		 * @return  self
		 */ 
		public function setEmail($email)
		{
				$this->email = $email;

				return $this;
		}

		/**
		 * Set the value of password
		 *
		 * @return  self
		 */ 
		public function setPassword($password)
		{
				$this->password = $password;

				return $this;
		}

		/**
		 * Set the value of birthday
		 *
		 * @return  self
		 */ 
		public function setBirthday($birthday)
		{
				$this->birthday = $birthday;

				return $this;
		}

		/**
		 * Set the value of sex
		 *
		 * @return  self
		 */ 
		public function setSex($sex)
		{
				$this->sex = $sex;

				return $this;
		}

		/**
		 * Set the value of aboutYou
		 *
		 * @return  self
		 */ 
		public function setAboutYou($aboutYou)
		{
				$this->aboutYou = $aboutYou;

				return $this;
		}

		/**
		 * Set the value of role
		 *
		 * @return  self
		 */ 
		public function setRole($role)
		{
				$this->role = $role;

				return $this;
		}

		/**
		 * Set the value of interest
		 *
		 * @return  self
		 */ 
		public function setInterest($interest)
		{
				$this->interest = $interest;

				return $this;
		}

	}
?>
