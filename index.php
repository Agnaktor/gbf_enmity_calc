<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
		<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

		<title>Granblue Enmity Calculator</title>
	</head>
	<body>
		<!-- A grey horizontal navbar that becomes vertical on small screens -->
		<nav class="navbar navbar-expand-sm bg-light">

		  <!-- Links -->
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="index.php">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="about.php">About</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="https://gbf.wiki/Weapon_Skills#ATK_Up_as_HP_lowers">Reference</a>
		    </li>
		  </ul>
		</nav>

    <div class="container text-center">
  		<h1>Granblue Fantasy Enmity Calculator</h1>
      <hr/>
      <p>Enmity means attack will go up when your HP lower.</p>
      <p>At first, this is just data that explain skill level and how much increase persentage when you are using enmity. As you can see at the table below : </p>
        <table class="table table-bordered text-center" style="">
        <tbody>
          <tr>
            <th> Skill level </th>
            <th> 1 </th>
            <th> 2 </th>
            <th> 3 </th>
            <th> 4 </th>
            <th> 5 </th>
            <th> 6 </th>
            <th> 7 </th>
            <th> 8 </th>
            <th> 9 </th>
            <th> 10 </th>
            <th> 11 </th>
            <th> 12 </th>
            <th> 13 </th>
            <th> 14 </th>
            <th> 15 </th>
          </tr>
          <tr>
            <th> Small </th>
            <td> 0.5% </td>
            <td> 1.1% </td>
            <td> 1.7% </td>
            <td> 2.3% </td>
            <td> 2.9% </td>
            <td> 3.5% </td>
            <td> 4.09% </td>
            <td> 4.7% </td>
            <td> 5.3% </td>
            <td> 6.0% </td>
            <td> 6.2% </td>
            <td> 6.4% </td>
            <td> 6.6% </td>
            <td> 6.8% </td>
            <td> 7.0% </td>
          </tr>
          <tr>
            <th> Medium </th>
            <td> 0.66% </td>
            <td> 1.46% </td>
            <td> 2.26% </td>
            <td> 3.06% </td>
            <td> 3.86% </td>
            <td> 4.66% </td>
            <td> 5.46% </td>
            <td> 6.26% </td>
            <td> 7.06% </td>
            <td> 8.0% </td>
            <td> 8.4% </td>
            <td> 8.79% </td>
            <td> 9.2% </td>
            <td> 9.6% </td>
            <td> 10.0% </td>
          </tr>
          <tr>
            <th> Big </th>
            <td> 0.83% </td>
            <td> 1.83% </td>
            <td> 2.83% </td>
            <td> 3.83% </td>
            <td> 4.83% </td>
            <td> 5.83% </td>
            <td> 6.83% </td>
            <td> 7.83% </td>
            <td> 8.83% </td>
            <td> 10.0% </td>
            <td> 10.5% </td>
            <td> 11.0% </td>
            <td> 11.5% </td>
            <td> 12.0% </td>
            <td> 12.5% </td>
          </tr>
        </tbody>
      </table>

      <hr/>
      <h4>The formula for calculating enmity was from gbf.wiki :</h4>
      <p class="font-weight-bold">HP Ratio = 1 - (Current HP / Max HP)</p>
      <p class="font-weight-bold">Enmity = Modifier * ((1 + 2 * HP Ratio) * HP Ratio)</p>

      <hr/>

      <div class="row">
        <div class="col-md-6">
          <div>
            <p>Please input the percentage of your current HP</p>
            <input type="text" name="current_hp" placeholder="50">
          </div>
          <div>
            <p>Please input the modifier percentage of your skill weapon</p>
            <input type="text" name="current_modifier" placeholder="7"/>
          </div>
          <div style="margin-top:20px;">
            <button class="btn btn-primary btn-calc-enmity">Calculate My Enmity</button>
          </div>  
        </div>
        <div class="col-md-6">
          <div>
            <p>Below is the result from enmity boost to your attack percentage : </p>
            <p class="font-weight-bold result_enmity" style="font-size:100px;"></p>
          </div>
        </div>
      </div>
    </div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      $('.btn-calc-enmity').on('click', function(e) {
        var current_hp = $('input[name=current_hp]').val();
        var current_modifier = $('input[name=current_modifier]').val();

        var get_hp_ratio = (1 - (current_hp / 100)) * 100;
        var first_part = (2 * get_hp_ratio)/100;
        var modifier_part = (1 + first_part) * (get_hp_ratio/100);
        var result_modifier = current_modifier * modifier_part;

        $('.result_enmity').empty().text(result_modifier.toFixed(2) + ' %');
      })
      $(document).keypress(function(e){
        if (e.which == 13){
            $(".btn-calc-enmity").click();
        }
      });
    </script>
	</body>
</html>