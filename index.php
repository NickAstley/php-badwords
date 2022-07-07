<?php
$paragrafoDaCensurare = "Ciao,
questo è il primo paragrafo che scrivo in php.
Sarebbe un peccato se scrivessi `obliquo` molte volte.
Obliquo, oblIquo, oBlIqUo.
Preferisco procedere il linea retta verso la fine dell'esercizio.";
$lunghezzaParagrafo = strlen($paragrafoDaCensurare);
$parolaDaCensurare = $_GET["censura"];
$paragrafoCensurato = str_ireplace($parolaDaCensurare, "***", $paragrafoDaCensurare);
$lunghezzaParagrafoCensurato = strlen($paragrafoCensurato);

echo $paragrafoDaCensurare;
echo "<br>";
echo "Il paragrafo è lungo <strong>" . $lunghezzaParagrafo . "</strong> caratteri(compresi gli spazi).";
echo "<br>";
echo $paragrafoCensurato;
echo "<br>";
echo "Il paragrafo censurato è lungo <strong>" . $lunghezzaParagrafoCensurato . "</strong> caratteri(compresi gli spazi).";
?>