<!DOCTYPE html>
<html>
  <head>
    <title>Kalkulator Sederhana PHP By Nebula</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <style>
      /* CSS untuk kalkulator */
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f1f1f1;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      form input,
      form select {
        background-color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        margin-bottom: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      }

      form select {
        cursor: pointer;
      }

      .hasil {
        font-size: 24px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <a class="navbar-brand" href="#">Kalkulator PHP By Nebula</a>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <div class="container">
      <form method="POST">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        <select name="operator" required>
          <option value="">Pilih operatornya</option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <button type="submit button"class="btn btn-outline-warning">Hitung Cuy!</button>
        <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            switch ($operator) {
              case '+':
                $hasil = $angka1 + $angka2;
                break;
              case '-':
                $hasil = $angka1 - $angka2;
                break;
              case '*':
                $hasil = $angka1 * $angka2;
                break;
              case '/':
                $hasil = $angka1 / $angka2;
                break;
              default:
                $hasil = '';
                break;
            }

            if (!empty($hasil)) {
              echo '<div class="hasil">Hasilnya: ' . $hasil . '</div>';
            }
          }
        ?>
      </form>
    </div>
  </body>
</html>