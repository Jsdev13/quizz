<?php


echo "###################################################
######## Qui veux gagner des millions ?! ##########
###################################################

###################################################
Score : $score .
###################################################\n";

$questions = [
"Quelle est la couleur du cheval blanc d'Henri IV ?\n1.Noir\n2.Blanc\n3.Rouge\n",
"Prise de la Bastille?\n1.1789\n2.1750\n3.1800\n",
"Qui a créer le bitcoin? \n1.Emmanuel Macron\n2.Satoshi Nakamoto\n3.Le Bloc Zero\n4.Papa bitcoin\n",
"Qui est le créateur de ledger? \n1.Vitalik Buterin\n2.Charlie Lee\n3.Eric Larcheveque\n4.Andreas M.Antonopoulos\n",
"Qui est le meilleur hackeur de France? \n1.Anonymous\n2.Jsdev\n3.Lazarus\n"
];

$reponses = [2, 1, 2, 3, 2];
$score = 0;
$total = count($questions);

for($i = 0; $i < $total; $i++){
    echo "Question " . ($i + 1) . " :\n";
    echo $questions[$i]."\n";
    $reponse = trim(fgets(STDIN));
    
    if ($reponse == $reponses[$i]) {
        echo "Suspennnnce !\n";
        sleep(1); // Pause de 1 seconde pour le suspense
        echo "Bien joué! +10 points.\n";
        $score += 10;

    fgets(STDIN);
        
    } else {
        sleep (1);
        echo "NON !\n";
        echo "le score n'augmente pas.\n";
        $score += 0;
    }
    
}


echo "Suspennnnce !\n";
sleep(1); // Pause de 1 seconde pour le suspense
if ($reponse == $reponses[1]) {
    echo "Bien joué!\n";
    echo "le score est de $score.\n";

} 

$percentage = round(($score / ($total *10)) * 100);
echo "################\n";
echo "Score :$score.\n";
echo "################\n";

echo "########### GAME OVER ###########\n";
echo "Pourcentage de bonne réponse  : $percentage%\n\n";

if ($percentage >= 70) {
    echo "Bien joué tu as gagné des ETH !\n";
} else {
    echo "Dommage, reviens t'entrainer.\n";
}
 echo "######################################################################\n";