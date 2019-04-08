<?php

namespace Core\User;

class User extends \Core\User\Abstracts\User {

    const ACC_TYPE_USER = 0;
    const ACC_TYPE_ADMIN = 1;

    public function __construct($data = null) {
        if (!$data) {
            $this->data = [
                'username' => null,
                'email' => null,
                'full_name' => null,
                'age' => null,
                'gender' => null,
                'orientation' => null,
                'photo' => null,
                'account_type' => null,
                'is_active' => null,
                'password' => null
            ];
        } else {
            $this->setData($data);
        }
    }

    public function getAccountType(): int {
        $this->data['account_type'];
    }

    public function getIsActive(): bool {
        $this->data['is_active'];
    }

    public function getPassword(): string {
        $this->data['password'];
    }

    public function setAccountType(int $type) {
        if (in_array($type, [$this::ACC_TYPE_ADMIN, $this::ACC_TYPE_USER])) {
            $this->data['type'] = $type;

            return true;
        }
    }

    public function setIsActive(bool $active) {
        $this->data['is_active'] = $active;
    }

    public function setPassword(string $password) {
        $this->data['password'] = $password;
    }

    public function setData(array $data) {
        $this->setUsername($data['username'] ?? '');
        $this->setEmail($data['email'] ?? '');
        $this->setFullName($data['full_name'] ?? '');
        $this->setAge($data['age'] ?? null);
        $this->setGender($data['gender'] ?? '');
        $this->setOrientation($data['orientation'] ?? '');
        $this->setPhoto($data['photo'] ?? '');
        $this->setAccountType($data['type'] ?? '');
        $this->setIsActive($data['is_active'] ?? '');
        $this->setPassword($data['password'] ?? '');
    }

    public function getData() {
        return $this->data;
    }

}
