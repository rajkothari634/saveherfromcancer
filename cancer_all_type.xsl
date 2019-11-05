<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
	<title>Cancer All Type</title>
	<script type="text/javascript">
		var a=0;
		var prev_selected_alphabetId = "A";
		var curr_selected_alphabetId = "A";
		function select_alphabet(id){
			document.getElementById(prev_selected_alphabetId).style.backgroundColor = "#00000000";
			document.getElementById(prev_selected_alphabetId).style.color = "#000000";
			prev_selected_alphabetId = id;
			curr_selected_alphabetId = id;
			document.getElementById(curr_selected_alphabetId).style.backgroundColor = "#cd1e41";
			document.getElementById(curr_selected_alphabetId).style.color = "#ffffff";
		}
	</script>
	<style type="text/css">
		.table_row{
			margin-top: 5px;
			margin-bottom: 5px;
			cursor: pointer;
		}
		.alphabet{
			 width: 35px;
			 text-align: center;
			 height: 35px;
			 cursor: pointer;
			 scroll-behavior: hidden;
			 font-size: 25px;
			 color: #000000;
			 resize: none;
			 border: 1px solid #ffffff;
		}
		.alphabet:hover{
			background-color: #cd1e41;
			color: #ffffff;
		}
	</style>
</head>
<body>
	<div class="top_donate_button" style="float: right;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #cd1e41;width: 190px;height: 42px;margin-bottom: 100px;margin-top: 25px;margin-right: 20px;color: white;">
		<center style="font-family: bold;font-size: 20px; margin-top: 10px;"><p style="color: white;margin-top: -1px;cursor: pointer;">DONATE</p></center>
	</div>
	<center><img class="center_element" src="background.png" style="width: 75px;height: 75px;margin-left: 180px;border-radius: 75px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top: 10px;">
	<br>
	<p id="cancer_heading" style="margin-left: 180px;font-size: 40px;">Cancer Name</p>
	<p id="heading_below" style="font-size: 25px;width: 60%;margin-top: -15px;">Whether you or a loved one are worried about developing breast cancer, have just been diagnosed, are going through breast cancer treatment, or are trying to stay well after treatment, this detailed information can help you find the answers you need.</p>
	<br>
	<textarea class="alphabet" id="A" onclick="select_alphabet('A')" readonly="true">A</textarea>
	<textarea class="alphabet" id="B" onclick="select_alphabet('B')" readonly="true">B</textarea>
	<textarea class="alphabet" id="C" onclick="select_alphabet('C')" readonly="true">C</textarea>
	<textarea class="alphabet" id="D" onclick="select_alphabet('D')" readonly="true">D</textarea>
	<textarea class="alphabet" id="E" onclick="select_alphabet('E')" readonly="true">E</textarea>
	<textarea class="alphabet" id="F" onclick="select_alphabet('F')" readonly="true">F</textarea>
	<textarea class="alphabet" id="G" onclick="select_alphabet('G')" readonly="true">G</textarea>
	<textarea class="alphabet" id="H" onclick="select_alphabet('H')" readonly="true">H</textarea>
	<textarea class="alphabet" id="I" onclick="select_alphabet('I')" readonly="true">I</textarea>
	<textarea class="alphabet" id="J" onclick="select_alphabet('J')" readonly="true">J</textarea>
	<textarea class="alphabet" id="K" onclick="select_alphabet('K')" readonly="true">K</textarea>
	<textarea class="alphabet" id="L" onclick="select_alphabet('L')" readonly="true">L</textarea>
	<textarea class="alphabet" id="M" onclick="select_alphabet('M')" readonly="true">M</textarea>
	<textarea class="alphabet" id="N" onclick="select_alphabet('N')" readonly="true">N</textarea>
	<textarea class="alphabet" id="O" onclick="select_alphabet('O')" readonly="true">O</textarea>
	<textarea class="alphabet" id="P" onclick="select_alphabet('P')" readonly="true">P</textarea>
	<textarea class="alphabet" id="Q" onclick="select_alphabet('Q')" readonly="true">Q</textarea>
	<textarea class="alphabet" id="R" onclick="select_alphabet('R')" readonly="true">R</textarea>	
	<textarea class="alphabet" id="S" onclick="select_alphabet('S')" readonly="true">S</textarea>
	<textarea class="alphabet" id="T" onclick="select_alphabet('T')" readonly="true">T</textarea>
	<textarea class="alphabet" id="U" onclick="select_alphabet('U')" readonly="true">U</textarea>
	<textarea class="alphabet" id="V" onclick="select_alphabet('V')" readonly="true">V</textarea>
	<textarea class="alphabet" id="W" onclick="select_alphabet('W')" readonly="true">W</textarea>
	<textarea class="alphabet" id="X" onclick="select_alphabet('X')" readonly="true">X</textarea>
	<textarea class="alphabet" id="Y" onclick="select_alphabet('Y')" readonly="true">Y</textarea>
	<textarea class="alphabet" id="Z" onclick="select_alphabet('Z')" readonly="true">Z</textarea>
	<br>

	
		<textarea style="width: 50%;height: 30px;font-size: 20px;text-align: left;padding-left: 15px;padding-top: 5px;resize: none;margin-left: 19%;" placeholder="Search Box...."></textarea>
		<div style="width: 40px;height: 40px;background-color: #cd1e41;float: right;margin-right: 20%;">
			<img src="background.png" style="width: 30px;margin-top: 5px;height: 30px;"></div>
		<br>
		<br><br>
		<table style="width: 65%;margin-top: 10px;font-size: 20px;text-align: center;">
			<tr class="table_row" style="background-color: #c1c1c1;">
				<th>NAME</th>
			</tr>
			<xsl : for-each select="catalog/cd">
	  			<tr>
	     			<td><xsl : value-of select="title"/></td>
	   			</tr>
   			</xsl : for-each>
		</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>