<?php
    class User{
        private string $userName;
        private string $pw;
        private string $email;
        private string $gender;

    public function __construct(string $userName, string $pw, string $email, string $gender) {
        $this->userName = $userName;
        $this->pw = $pw;
        $this->email = $email;
        $this->gender = $gender;
    }
    
    public function getUserName(): string {
        return $this->userName;
    }
    public function setuserName(string $userName): void {
        $this->userName = $userName;
    }

    public function getPw(): string {
        return $this->pw;
    }
    public function setPw(string $pw): void {
        $this->pw = $pw;
    }

    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    
    public function getGender(): string {
        return $this->gender;
    }
    public function setGender(string $gender): void {
        $this->gender = $gender;
    }

    }
?>