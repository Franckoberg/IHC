<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Retour du texte à la ligne et couleurs</title>
<link type="text/css" rel="stylesheet" href="../fpdf.css">
</head>
<body>
<h1>Retour du texte à la ligne et couleurs</h1>
Voici pour continuer un exemple imprimant des paragraphes de texte justifié. Il illustre
également l'utilisation des couleurs.
<div class="source">
<pre><code>&lt;?php
<span class="kw">require(</span><span class="str">'fpdf.php'</span><span class="kw">);

class </span>PDF <span class="kw">extends </span>FPDF
<span class="kw">{
function </span>Header<span class="kw">()
{
    global </span>$titre<span class="kw">;

    </span><span class="cmt">// Arial gras 15
    </span>$<span class="kw">this-&gt;</span>SetFont<span class="kw">(</span><span class="str">'Arial'</span><span class="kw">,</span><span class="str">'B'</span><span class="kw">,</span>15<span class="kw">);
    </span><span class="cmt">// Calcul de la largeur du titre et positionnement
    </span>$w <span class="kw">= </span>$<span class="kw">this-&gt;</span>GetStringWidth<span class="kw">(</span>$titre<span class="kw">)+</span>6<span class="kw">;
    </span>$<span class="kw">this-&gt;</span>SetX<span class="kw">((</span>210<span class="kw">-</span>$w<span class="kw">)/</span>2<span class="kw">);
    </span><span class="cmt">// Couleurs du cadre, du fond et du texte
    </span>$<span class="kw">this-&gt;</span>SetDrawColor<span class="kw">(</span>0<span class="kw">,</span>80<span class="kw">,</span>180<span class="kw">);
    </span>$<span class="kw">this-&gt;</span>SetFillColor<span class="kw">(</span>230<span class="kw">,</span>230<span class="kw">,</span>0<span class="kw">);
    </span>$<span class="kw">this-&gt;</span>SetTextColor<span class="kw">(</span>220<span class="kw">,</span>50<span class="kw">,</span>50<span class="kw">);
    </span><span class="cmt">// Epaisseur du cadre (1 mm)
    </span>$<span class="kw">this-&gt;</span>SetLineWidth<span class="kw">(</span>1<span class="kw">);
    </span><span class="cmt">// Titre
    </span>$<span class="kw">this-&gt;</span>Cell<span class="kw">(</span>$w<span class="kw">,</span>9<span class="kw">,</span>$titre<span class="kw">,</span>1<span class="kw">,</span>1<span class="kw">,</span><span class="str">'C'</span><span class="kw">,</span>true<span class="kw">);
    </span><span class="cmt">// Saut de ligne
    </span>$<span class="kw">this-&gt;</span>Ln<span class="kw">(</span>10<span class="kw">);
}

function </span>Footer<span class="kw">()
{
    </span><span class="cmt">// Positionnement à 1,5 cm du bas
    </span>$<span class="kw">this-&gt;</span>SetY<span class="kw">(-</span>15<span class="kw">);
    </span><span class="cmt">// Arial italique 8
    </span>$<span class="kw">this-&gt;</span>SetFont<span class="kw">(</span><span class="str">'Arial'</span><span class="kw">,</span><span class="str">'I'</span><span class="kw">,</span>8<span class="kw">);
    </span><span class="cmt">// Couleur du texte en gris
    </span>$<span class="kw">this-&gt;</span>SetTextColor<span class="kw">(</span>128<span class="kw">);
    </span><span class="cmt">// Numéro de page
    </span>$<span class="kw">this-&gt;</span>Cell<span class="kw">(</span>0<span class="kw">,</span>10<span class="kw">,</span><span class="str">'Page '</span><span class="kw">.</span>$<span class="kw">this-&gt;</span>PageNo<span class="kw">(),</span>0<span class="kw">,</span>0<span class="kw">,</span><span class="str">'C'</span><span class="kw">);
}

function </span>TitreChapitre<span class="kw">(</span>$num<span class="kw">, </span>$libelle<span class="kw">)
{
    </span><span class="cmt">// Arial 12
    </span>$<span class="kw">this-&gt;</span>SetFont<span class="kw">(</span><span class="str">'Arial'</span><span class="kw">,</span><span class="str">''</span><span class="kw">,</span>12<span class="kw">);
    </span><span class="cmt">// Couleur de fond
    </span>$<span class="kw">this-&gt;</span>SetFillColor<span class="kw">(</span>200<span class="kw">,</span>220<span class="kw">,</span>255<span class="kw">);
    </span><span class="cmt">// Titre
    </span>$<span class="kw">this-&gt;</span>Cell<span class="kw">(</span>0<span class="kw">,</span>6<span class="kw">,</span><span class="str">"Chapitre </span>$num<span class="str"> : </span>$libelle<span class="str">"</span><span class="kw">,</span>0<span class="kw">,</span>1<span class="kw">,</span><span class="str">'L'</span><span class="kw">,</span>true<span class="kw">);
    </span><span class="cmt">// Saut de ligne
    </span>$<span class="kw">this-&gt;</span>Ln<span class="kw">(</span>4<span class="kw">);
}

function </span>CorpsChapitre<span class="kw">(</span>$fichier<span class="kw">)
{
    </span><span class="cmt">// Lecture du fichier texte
    </span>$txt <span class="kw">= </span>file_get_contents<span class="kw">(</span>$fichier<span class="kw">);
    </span><span class="cmt">// Times 12
    </span>$<span class="kw">this-&gt;</span>SetFont<span class="kw">(</span><span class="str">'Times'</span><span class="kw">,</span><span class="str">''</span><span class="kw">,</span>12<span class="kw">);
    </span><span class="cmt">// Sortie du texte justifié
    </span>$<span class="kw">this-&gt;</span>MultiCell<span class="kw">(</span>0<span class="kw">,</span>5<span class="kw">,</span>$txt<span class="kw">);
    </span><span class="cmt">// Saut de ligne
    </span>$<span class="kw">this-&gt;</span>Ln<span class="kw">();
    </span><span class="cmt">// Mention en italique
    </span>$<span class="kw">this-&gt;</span>SetFont<span class="kw">(</span><span class="str">''</span><span class="kw">,</span><span class="str">'I'</span><span class="kw">);
    </span>$<span class="kw">this-&gt;</span>Cell<span class="kw">(</span>0<span class="kw">,</span>5<span class="kw">,</span><span class="str">"(fin de l'extrait)"</span><span class="kw">);
}

function </span>AjouterChapitre<span class="kw">(</span>$num<span class="kw">, </span>$titre<span class="kw">, </span>$fichier<span class="kw">)
{
    </span>$<span class="kw">this-&gt;</span>AddPage<span class="kw">();
    </span>$<span class="kw">this-&gt;</span>TitreChapitre<span class="kw">(</span>$num<span class="kw">,</span>$titre<span class="kw">);
    </span>$<span class="kw">this-&gt;</span>CorpsChapitre<span class="kw">(</span>$fichier<span class="kw">);
}
}

</span>$pdf <span class="kw">= new </span>PDF<span class="kw">();
</span>$titre <span class="kw">= </span><span class="str">'Vingt mille lieues sous les mers'</span><span class="kw">;
</span>$pdf<span class="kw">-&gt;</span>SetTitle<span class="kw">(</span>$titre<span class="kw">);
</span>$pdf<span class="kw">-&gt;</span>SetAuthor<span class="kw">(</span><span class="str">'Jules Verne'</span><span class="kw">);
</span>$pdf<span class="kw">-&gt;</span>AjouterChapitre<span class="kw">(</span>1<span class="kw">,</span><span class="str">'UN ÉCUEIL FUYANT'</span><span class="kw">,</span><span class="str">'20k_c1.txt'</span><span class="kw">);
</span>$pdf<span class="kw">-&gt;</span>AjouterChapitre<span class="kw">(</span>2<span class="kw">,</span><span class="str">'LE POUR ET LE CONTRE'</span><span class="kw">,</span><span class="str">'20k_c2.txt'</span><span class="kw">);
</span>$pdf<span class="kw">-&gt;</span>Output<span class="kw">();
</span>?&gt;</code></pre>
</div>
<p class='demo'><a href='tuto3.php' target='_blank' class='demo'>[Démo]</a></p>
La méthode <a href='../doc/getstringwidth.htm'>GetStringWidth()</a> permet de déterminer la longueur d'une chaîne dans la police
courante, ce qui est utilisé ici pour calculer la largeur du cadre entourant le titre. Puis
les couleurs sont définies (via <a href='../doc/setdrawcolor.htm'>SetDrawColor()</a>, <a href='../doc/setfillcolor.htm'>SetFillColor()</a> et <a href='../doc/settextcolor.htm'>SetTextColor()</a>)
et l'épaisseur du trait positionnée à 1 mm (contre 0,2 par défaut) grâce à <a href='../doc/setlinewidth.htm'>SetLineWidth()</a>.
Il ne reste alors plus qu'à imprimer la cellule pour le titre (le dernier paramètre à 1 indique
que le fond doit être coloré).
<br>
<br>
La méthode permettant d'imprimer les paragraphes est <a href='../doc/multicell.htm'>MultiCell()</a>. A chaque fois qu'une
ligne arrive à l'extrémité droite de la cellule ou qu'un caractère de retour-chariot est
rencontré, un saut est effectué et une nouvelle cellule automatiquement créée sous la
précédente. Le texte est justifié par défaut.
<br>
<br>
Deux propriétés du document sont renseignées : le titre (<a href='../doc/settitle.htm'>SetTitle()</a>) et l'auteur
(<a href='../doc/setauthor.htm'>SetAuthor()</a>). Il y a plusieurs manères d'accéder aux propriétés dans Adobe Reader. La première
consiste à ouvrir le document directement avec le lecteur, à aller dans le menu Fichier et à
choisir l'option Propriétés. La seconde, disponible également à partir du plug-in, consiste à
faire un clic droit et à choisir Propriétés du document. Enfin, on peut effectuer la combinaison
de touches Ctrl+D.
</body>
</html>
