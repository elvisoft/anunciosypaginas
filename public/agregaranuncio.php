
<?php  
	include "../app/vistas/header.php";

?>

<div class="container">

<h1>Agregar Anuncio </h1>

<form class="form-horizontal" action="agregaranunciopaso2.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Tipo:</label>
    <div class="col-sm-4">
      <select name="tipoanuncio" id="tipoanuncio" class="form-control">
              <option value="1">Anuncio Clasificado</option>
              <option value="2">Empresa o Negocio</option>
              <option value="3">Sitio Web</option>              
              <option value="0" selected="selected">Tipo de anuncio</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="titulo">Titulo:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control input-sm" id="titulo" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-4"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-4">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary">Publicar Anuncio</button>
    </div>
  </div>
</form>

<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label>Username</label>
            <input type="text" value="jsmith" class="form-control">
            <label>First Name</label>
            <input type="text" value="John" class="form-control">
            <label>Last Name</label>
            <input type="text" value="Smith" class="form-control">
            <label>Email</label>
            <input type="text" value="jsmith@yourcompany.com" class="form-control">
            <label>Address</label>
            <textarea value="Smith" rows="3" class="form-control">2817 S 49th
    Apt 314
    San Jose, CA 95101
            </textarea>
            <label>Time Zone</label>
            <select name="DropDownTimezone" id="DropDownTimezone" class="form-control">
              <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
              <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
              <option value="-10.0">(GMT -10:00) Hawaii</option>
              <option value="-9.0">(GMT -9:00) Alaska</option>
              <option selected="selected" value="-8.0">(GMT -8:00) Pacific Time (US & Canada)</option>
              <option value="-7.0">(GMT -7:00) Mountain Time (US & Canada)</option>
              <option value="-6.0">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
              <option value="-5.0">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
              <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
              <option value="-3.5">(GMT -3:30) Newfoundland</option>
              <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
              <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
              <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
              <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
              <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
              <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
              <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
              <option value="3.5">(GMT +3:30) Tehran</option>
              <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
              <option value="4.5">(GMT +4:30) Kabul</option>
              <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
              <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
              <option value="5.75">(GMT +5:45) Kathmandu</option>
              <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
              <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
              <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
              <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
              <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
              <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
              <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
              <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
            </select>
            <div>
              <button class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
      <form id="tab2">
          <label>New Password</label>
          <input type="password" class="form-control">
          <div>
              <button class="btn btn-primary">Update</button>
          </div>
      </form>
      </div>
  </div>


</div>

<?php  
	include "../app/vistas/footer.php";

?>
