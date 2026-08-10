<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- CSRF Token Laravel -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Login - Manajemen Stok</title>

  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body{
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
    }

    .login-container{
      width: 350px;
      background: white;
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .login-container h1{
      text-align: center;
      margin-bottom: 10px;
      color: #333;
      font-size: 28px;
    }

    .login-container p{
      text-align: center;
      margin-bottom: 25px;
      color: #666;
      font-size: 14px;
    }

    .form-group{
      margin-bottom: 20px;
    }

    .form-group label{
      display: block;
      margin-bottom: 8px;
      color: #444;
      font-weight: bold;
    }

    .form-group input{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    .form-group input:focus{
      border-color: #4facfe;
      box-shadow: 0 0 5px rgba(79,172,254,0.5);
    }

    .btn-login{
      width: 100%;
      padding: 12px;
      background: #4facfe;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-login:hover{
      background: #2196f3;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h1>Manajemen Stok</h1>
    <p>Silakan login untuk melanjutkan</p>

    <form action="{{ route('login') }}" method="POST">
      @csrf

      <div class="form-group">
        <label>Email</label>
        <input 
          type="email" 
          name="email" 
          placeholder="Masukkan email" 
          required
        >
      </div>

      <div class="form-group">
        <label>Password</label>
        <input 
          type="password" 
          name="password" 
          placeholder="Masukkan password" 
          required
        >
      </div>

      <button type="submit" class="btn-login">
        Login
      </button>

    </form>
  </div>

</body>
</html>