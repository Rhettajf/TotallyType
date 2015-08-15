<?php 
	$title = "Totally Type Lessons";
	$page = "lessons";
	$bclass = "";
	$invert = "off";
	include("parts/header.php")
?>
<div class="row">
    <div class="large-6 columns">
		<h1>Measuring Type</h1>
        <p>There are five units for measuring type:</p>
        <table style="width:100%; font-size:0.8888888888888889em;" class="lining;">
            <tbody>  
                <thead>
                    <tr>
                        <th>unit</th>
                        <th>abbreviation</th>
                        <th>medium</th>
                        <th>type</th>
                    </tr>
                </thead>          
                <tr>
                    <td>point</td>
					<td>pt</td>
					<td>print</td> 
                    <td>absolute</td>                    
                </tr>
                <tr>
                    <td>pixel</td>
					<td>px</td>
                    <td>screen</td>
                    <td>absolute</td>
                </tr>
                <tr>
                    <td>em</td>
					<td>em</td>
                    <td>fonts &amp; web</td>
                    <td>internal/relative</td>
                </tr>
                <tr>
                    <td>percent</td>
					<td>%</td>
                    <td>web</td>
                    <td>relative</td>
                </tr>
                <tr>
                    <td>root-em</td>
                    <td>rem</td>
					<td>web</td>
                    <td>relative</td>
                </tr>
            </tbody>
        </table>
        <p>Lets take a look at the oldest absolute unit &mdash; points.</p>
	</div>
</div>
<div class="row">
    <div class="large-6 columns">
		<h2>Absolute Units</h2>
		<?php include("parts/content/absolute-units.php") ?>
    </div>
</div>
<div class="row">
    <div class="large-6 columns">
		<h2>Pixel a fixed unit</h2
   		><?php include("parts/content/pixel.php") ?>
    </div>
</div>
<div class="row">
    <div class="large-6 columns">
    	<h2>Relative Units</h2>
		<?php include("parts/content/relative-units.php") ?>
    </div>
</div>
<div class="row">
    <div class="large-6 columns push-top">
        <a href="lessons.php#letter" class="button secondary">Back to Lessons</a>
    </div>
</div>
<?php include("parts/footer.php"); ?>