<?php 

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre','email','password','token','confirmado'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->password_actual = $args['password_actual'] ?? '';
        $this->password_nuevo = $args['password_nuevo'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? 0;
    }

    // Validar el Login
    public function validarLogin() : array {

        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'La Contraseña no puede ir vacia';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'Email no válido';
        }
        
        return self::$alertas;
    }

    // Validación para cunetas nuevas
    public function validarNuevaCuenta() : array {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'La Contraseña no puede ir vacia';
        }
        if( strlen($this->password) < 6 ) {
            self::$alertas['error'][] = 'La Contraseña debe Contener al menos 6 Caracteres';
        }
        if($this->password !== $this->password2) {
            self::$alertas['error'][] = 'Las Contraseñas son diferentes';
        }

        return self::$alertas;
    }

    // Comprobar el password
    public function comprobar_password() : bool {
        return password_verify($this->password_actual, $this->password); // Retorna true o false
    }

    // Hashea el Password
    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    // Crea un token
    public function crearToken() : void {
        $this->token = uniqid();
    }

    // Nuevo password (DESDE EL PERFIL)
    public function nuevo_password() : array {
        if(!$this->password_actual) {
            self::$alertas['error'][] = 'La Contraseña Actual no puede ir Vacia';
        }
        if(!$this->password_nuevo) {
            self::$alertas['error'][] = 'La Contraseña Nueva no puede ir Vacia';
        }
        if( strlen($this->password_nuevo) < 6) {
            self::$alertas['error'][] = 'La Contraseña Debe Tener al Menos 6 Caracteres';
        }
        return self::$alertas;
    }

    // Valida el password
    public function validarPassword() : array {
        if(!$this->password) {
            self::$alertas['error'][] = 'La Contraseña no puede ir vacia';
        }
        if( strlen($this->password) < 6 ) {
            self::$alertas['error'][] = 'La Contraseña debe Contener al menos 6 Caracteres';
        }
        if($this->password !== $this->password2) {
            self::$alertas['error'][] = 'Las Contraseñas son diferentes';
        }

        return self::$alertas;
    }

    // Validar Perfiles
    public function validar_perfil() : array {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }

        return self::$alertas;
    }

    // Valida el Email
    public function validarEmail() : array {
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'Email no válido';
        }
        return self::$alertas;
    }
    
}