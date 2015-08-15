<div class="panel snapit">
<div class="row">
<div class="large-6 columns">
<h5 class="pull-top">Emil Ruder’s Spacing Test</h5>
<form>
  <fieldset class="row">
<div class="large-3 columns">
      <label for='control_offset'>Font:</label>
      <input id='font_fg' list='fonts' type='text' value='chaparral-pro'>
      </div>
<div class="large-3 columns push-top-small">      
      <label for='control_offset'>Font Size:</label>
      <input id='font_sz' type='text' value='10pt'>
      
     </div>
  </fieldset>
</form>
<datalist id='fonts'>
  <option value='Arial'></option>
  <option value='Baskerville'></option>
  <option value='Garamond'></option>
  <option value='Georgia'></option>
  <option value='Gill Sans'></option>
  <option value='Open Sans'></option>
  <option value='Palatino'></option>
  <option value='Tahoma'></option>
  <option value='Times New Roman'></option>
  <option value='Trebuchet MS'></option>
  <option value='Verdana'></option>
</datalist>
</div>
</div>
<div class="row">
<div class="large-3 columns">
<h6>Problematic</h6>
<p class="ruder">vertrag crainte screw verwalter croyant science verzicht fratricide sketchy vorrede frivolité story yankee instruction take zwetschge lyre treaty zypresse navette tricycle fraktur nocturne typograph kraft pervertir vanity raffeln presto victory reaktion prévoyant vivacity rekord priorité wayward revolte proscrire efficiency tritt raviver without trotzkopf tactilité through tyrann arrêt known</p>
</div>
<div class="large-3 columns">
<h6>Not Problematic</h6>
<p class="ruder">bibel malhabile modo biegen peuple punibile blind qualifier quindi damals quelle dinamica china quelque analiso schaden salomon macchina schein sellier secondo lager sommier singolo legion unique possibile mime unanime unico mohn usuel legge nagel abonner unione puder agir punizione quälen aiglon dunque huldigen allégir quando geduld alliance uomini</p>
</div>
</div>
<script>
var fg = $('.ruder')

function update() {
  fg.css({
    'font-family': $('#font_fg').val()
  });  
  fg.css({
    'font-size': $('#font_sz').val()
  });
}

$('input').on('input', function() {
  update();
});

fg.on('input', function() {
  fg.html(fg.html());
});

update();
</script>
</div>