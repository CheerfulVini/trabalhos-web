<?php

require_once("model/Carta.php");

$cartas = array();

array_push($cartas, new Carta("Omnath, Locus de furia", 7, "Criatura Lendaria - Elemental", "Rara", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=658680&type=card"));
array_push($cartas, new Carta("Tasigur, a Presa Dourada", 7, "Criatura Lendaria - Humano Xama", "Rara", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=696353&type=card"));
array_push($cartas, new Carta("Anel Solar", 1, "Artefato", "Incomum", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=692281&type=card"));
array_push($cartas, new Carta("Rancor", 1, "Encantamento - Aura", "Comum", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=653168&type=card"));
array_push($cartas, new Carta("Relampago", 1, "Instantâneo", "Comum", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=651876&type=card"));
array_push($cartas, new Carta("Cultivar", 3, "Feitiço", "Comum", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=696409&type=card"));
array_push($cartas, new Carta("Templo do Misterio", 0, "Terreno", "Incomum", "https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=696560&type=card"));

$cartaEscolhida = $cartas[rand(0, count($cartas) - 1)];



print("<h1>Jogo de adivinhar</h1>");
print($cartaEscolhida->getNome());

if($_GET["resposta"] != null){
    if($_GET["resposta"] == $cartaEscolhida->getNome()){
        print("<h2>ACERTOU!!!!</h2> <br>");
    }else{
        print("<h2>ERROU!!!!!!</h2> <br>");

        $dica = rand(1, 3);

        switch ($dica) {
            case 1:
                print("O custo de mana da carta era: " . $cartaEscolhida->getCustoDeMana());
            break;

            case 2:
                print("O tipo da carta era: " . $cartaEscolhida->getTipo());
            break;
            
            case 3:
                print("A raridade da carta era: " . $cartaEscolhida->getRaridade());
            break;
        }
    }
}

print("<br><br>");

print("Você terá que adivinhar uma entre 7 cartas do jogo Magic: The Gathering. Coloque as respostas no url, desse jeito: ?resposta=Anel Solar <br>");
print("Boa sorte, aqui estão as cartas:");
print("<br> <br>");

foreach ($cartas as $carta) {
    print("Nome: " . $carta->getNome() . " | Custo de mana: " . $carta->getCustoDeMana() . " | Tipo: " . $carta->getTipo() . " | Raridade: " . $carta->getRaridade() . " | <img src=' " . $carta->getImagem() . "' height=100><br>");
}