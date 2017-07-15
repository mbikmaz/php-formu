<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kullanıcı Formu</title>
    <script>
        function msg()
        {
          alert("Gönderme işlemi geçekleşiyor bekleyiniz...");
        }
    </script>
  </head>
  <body style="background:#e8d9c5;">
    <center>
          <table style="border: 5px  solid #f84364">
            <tr>
              <td>
                <h1>Kullanıcı Giriş Formu</h1>
              <form class="" action="gonder.php" method="post">
      <fieldset>
                  <legend>Kişisel Bilgiler</legend>
                  <br>
                    <label for="">Adınız: </label>
                    <input type="text" name="ad" value="" placeholder="Adınız" size="18" maxlength="15">
                    <br> <br>
                    <label for="">Şifreniz: </label>
                    <input type="password" name="sifre" value="" placeholder="Sifreniz" size="18" maxlength="15">
                    <br> <br>
                    <label for="">Cinsiyetiniz: </label>
                    <input type="radio" name="cinsiyet" value="erkek">Erkek
                    <input type="radio" name="cinsiyet" value="kadın">Kadın
                    <br> <br>
                    <label for="">Yaşınız: </label>
                    <select name=" yas" id="">
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                    </select>
                </fieldset>
                <fieldset>
                  <legend>Kullandığınız Programlama Dili</legend>
                    <input type="checkbox" name="dil[ ]" value="Java"> Java
                    <input type="checkbox" name="dil[ ]" value="C/C++"> C/C++
                    <input type="checkbox" name="dil[ ]" value="C#"> C#
                </fieldset>
                <fieldset>
                  <legend>Talimatlar</legend>
                  <textarea name="talimat" rows="8" cols="80" placeholder="Lütfen Talimatlarınızı buraya yazınız..."></textarea>
                </fieldset>
                <button type="submit" value="Gonder" onclick="msg()">Gönder</button>
                <button type="reset">Temizle</button>
              </form>
              </td>
            </tr>

          </table>
        </center>

  </body>
</html>
