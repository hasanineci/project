<!DOCTYPE html>
<html lang="tr">
<head>
  <title>My Project</title>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- must have any conversion -->
  <script type="text/javascript" src="js/tableExport.js"></script>
  <script type="text/javascript" src="js/jquery.base64.js"></script>
  <!-- for export as pdf -->
  <script type="text/javascript" src="js/jspdf/jspdf.js"></script>
  <script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
  <script type="text/javascript" src="js/jspdf/libsbase64.js"></script>

</head>
<body>
  <div class="headerColor"></div>
  <div class="content">
    <div class="headerWrite"><h3>STUDENT REGISTRY</h3></div>
    <div class="myPdf">
      <table id="myTable" class="tablePdf">
        <tr><td  colspan="5" class="title"><h2>ULUSLARARASI KIBRIS ÜNİVERSİTESİ</h2></td></tr>
        <tr><td rowspan="5"><img src="images/ciulogo.png"></td></tr>
        <tr>
          <td colspan="3" class="colColor"><h5>ÖĞRENCİ KAYIT FORMU </h5></td>
          <td rowspan="4"><img src="images/benim.jpg" class="studentFoto"></td>
        </tr>
        <tr><td>Registration date and place</td><td><input></input></td></tr>
        <tr><td>Representative name</td><td colspan="2"><input></input></td></tr>
        <tr><td>Discount/Scholarship</td><td colspan="2"><input></input></td></tr>
        <tr><td  colspan="2" class="partTwo">A. GENEL BİLGİLER</td></tr>
        <tr></tr><tr></tr>
        <tr><td>Name                 </td><td  colspan="4"><input></input></td></tr>
        <tr><td>Surname              </td><td  colspan="4"><input></input></td></tr>
        <tr><td>Father               </td><td  colspan="4"><input></input></td></tr>
        <tr><td>mather               </td><td  colspan="4"><input></input></td></tr>
        <tr><td>Birth day            </td><td  colspan="4"><input></input></td></tr>
        <tr><td>Place of birth       </td><td  colspan="4"><input></input></td></tr>
        <tr><td>Country              </td><td  colspan="4"><input></input></td></tr>
        <tr>
          <td>Gender               </td>
          <td colspan="2">
            <input type="radio" name="gender" value="male"> <span>Male</span>
            <input type="radio" name="gender" value="female"> <span>Female</span>
          </td>
        </tr>
        <tr><td>e-mail               </td><td  colspan="2"><input></input></td></tr>
        <tr>
          <td>Phone number           </td><td><input></input></td>
          <td class="hmno">Home phone number      </td><td  colspan="4"><input></input></td>
        </tr>
        <tr><td>Student Parent       </td><td  colspan="2"><input></input></td></tr>              
        <tr><td>Parent Phone Number  </td><td  colspan="2"><input></input></td></tr>
        <tr></tr><tr></tr>
        <tr><td colspan="2" class="partThree">B. AKADEMIK BİLGİLER</td></tr>
        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr><td colspan="3">KAYIT YAPACAĞI PROGRAM <hr></td><td  colspan="2">ÜNİVERSİTEYE KAYIT ŞEKLİ <hr></td></tr>
        <tr>
          <td colspan="2">Meslek Yüksekokulu</td><td><input type="checkbox" value="myo"></td>
          <td colspan="3">YGS/LYS</td><td><input type="checkbox" value="ygs"></td>
        </tr>
        <tr>
          <td colspan="2">Sağlık Meslek Yüksekokulu</td><td><input type="checkbox" value="smyo"></td>
          <td colspan="3">Dikey Geçiş Sınavı(DGS)</td><td><input type="checkbox" value="dgs"></td>
        </tr>
        <tr>
          <td colspan="2">Lisans Programı</td><td><input type="checkbox" value="lsns"></td>
          <td colspan="3">Özel yetenek</td><td><input type="checkbox" value="ytnk"></td>
        </tr>
        <tr>
          <td colspan="2">Yüksek Lisans Programı</td><td><input type="checkbox" value="mstr"></td>
          <td colspan="3">Misafir Öğrenci</td><td><input type="checkbox" value="guest"></td>
        </tr>
        <tr>
          <td colspan="2">Doktora Programı</td><td><input type="checkbox" value="drPrg"></td>
          <td colspan="3">Diğer</td><td><input type="checkbox" value="other"></td>
        </tr>
        <tr>
          <td>Kayıt olduğu bölüm</td>
          <td  colspan="5"><input></input></td>
        </tr>



      </table><!-- tabloPdf -->
      <br><br><button id="pdf">SAVE</button>
      <button id="pdf">PDF DOWNLOAD</button>
    </div><!-- pdf -->
  </div><!-- content -->
<div class="footherColor"></div>



  <script type="text/javascript">
    $(document).ready(function(e){
      $("#pdf").click(function(e){
        $("#myTable").tableExport({
          type:'pdf',
          escape: 'false'
        });
      });
    });
  </script>
  
</body>
</html>