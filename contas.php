<!DOCTYPE html>
<html>
<head>

  
	<title></title>
</head>
<body onload="hidefield()">

 <select name='sd' onchange="showfield(this.options[this.selectedIndex].value)">

 <option name="selecione" id="selecione" value="selecione">Selecione</option>
 <option name="Janeiro" id="janeiro" value="Janeiro">Janeiro</option>
 <option name="Fevereiro" id="fevereiro" value="Fevereiro">Fevereiro</option>
 <option name="Marco" id="marco" value="Marco">Março</option>
 <option name="Abril" id="abril" value="Abril">Abril</option>
 <option name="Maio" id="maio" value="Maio">Maio</option>
 <option name="Junho" id="junho" value="Junho">Junho</option>
 <option name="Julho" id="julho" value="Julho">Julho</option>
 <option name="Agosto" id="agosto" value="Agosto">Agosto</option>
 <option name="Setembro" id="setembro" value="Setembro">Setembro</option>
 <option name="Outubro" id="outubro" value="Outubro">Outubro</option>
 <option name="Novembro" id="novembro" value="Novembro">Novembro</option>
 <option name="Dezembro" id="dezembro" value="Dezembro">Dezembro</option>

  </select>
<div id="dselecione">Selecione</div>

<div id="djaneiro">Janeiro</div>
<div id="dfevereiro">Fevereiro</div>
<div id="dmarco">Março</div>
<div id="dabril">Abril</div>
<div id="dmaio">Maio</div>
<div id="djunho">Junho</div>
<div id="djulho">Julho</div>
<div id="dagosto">Agosto</div>
<div id="dsetembro">Setembro</div>
<div id="doutubro">Outubro</div>
<div id="dnovembro">Novembro</div>
<div id="ddezembro">Dezembro</div>

 
<script type="text/javascript">
    function hidefield() {
 document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  

 }    
</script>

<script type="text/javascript">
function showfield(name){
  
  if(name=="Janeiro") {
 document.getElementById("djaneiro").style.display="block";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
         document.getElementById("dselecione").style.display="none";


}

   if(name=="Fevereiro") {
   document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="block";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
   if(name=="Marco"){
document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="block";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
   if(name=="Abril"){
document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="block";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  } 
   if(name=="Maio") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="block";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
   if(name=="Junho") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="block";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

}
   if(name=="Julho") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="block";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

}
  if(name=="Agosto") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="block";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
   if(name=="Setembro") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="block";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
   if(name=="Outubro") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="block";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
  if(name=="Novembro") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="block";
 document.getElementById("ddezembro").style.display="none";
  document.getElementById("dselecione").style.display="none";   

  }
   if(name=="Dezembro") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="block";
 document.getElementById("dselecione").style.display="none";   
  }if(name == "selecione") {
    document.getElementById("djaneiro").style.display="none";
 document.getElementById("dfevereiro").style.display="none";
 document.getElementById("dmarco").style.display="none";
 document.getElementById("dabril").style.display="none";
 document.getElementById("dmaio").style.display="none";
 document.getElementById("djunho").style.display="none";
 document.getElementById("djulho").style.display="none";
 document.getElementById("dagosto").style.display="none";
 document.getElementById("dsetembro").style.display="none";
 document.getElementById("doutubro").style.display="none";
 document.getElementById("dnovembro").style.display="none";
 document.getElementById("ddezembro").style.display="none";
 document.getElementById("dselecione").style.display="block";   
  }
  
}

</script>
</body>
</html>