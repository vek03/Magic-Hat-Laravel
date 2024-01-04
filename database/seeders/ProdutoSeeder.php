<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    static $produtos = [
        ['6', 'Mega Casa dos Sonhos da Barbie', '7', '5', 'Criança', '21', '1090.99', 'Mattel', 'Plástico', 'A criançada vai adorar brincar com a Mega Casa dos Sonhos da Barbie, de três andares, com piscina, escorregador, elevador e muito mais.', 'img/produtos/1.jpg', 'img/produtos/2.jpg', 'img/produtos/3.jpg'],
        ['6', 'Baby Alive Hora do Xixi', 1, 9, 'Criança', 34, 55.99, 'Baby Alive', 'Plástico, vinil, borracha e tecido ', 'A Boneca Baby Alive Hora do Xixi vai garantir muita animação e carinho. Vem com acessórios. Dê água com a mamadeira e ela irá fazer xixi em sua fralda. ', 'img/produtos/4.jpg', 'img/produtos/5.jpg', 'img/produtos/6.jpg'],
        ['6', 'Super Kit Fashion da Polly Pocket', 5, 7, 'Criança', 11, 239.99, 'Mattel', 'Plástico', 'Prepare-se para a super coleção de moda da Polly e seus amigos. A coleção apresenta quatro bonecos: Polly, Lila, Shani e Nicolas e muitos acessórios para se divertir.  ', 'img/produtos/7.jpg', 'img/produtos/8.jpg', 'img/produtos/9.jpg'],
        ['6', 'LOL Surprise Lils', 5, 1, 'Criança', 140, 95.99, 'Candide', 'Plástico', 'As crianças ficarão encantadas com a LOL Surprise Lils que conta com cinco surpresas e, para ficar melhor, as lindas bonequinhas mudam de cor na água.    ', 'img/produtos/10.jpg', 'img/produtos/11.jpg', 'img/produtos/12.jpg'],
        ['6', 'Hermione Granger', 6, 7, 'Criança', 7, 143.99, 'Sunny', 'Plástico', 'A bruxinha mais inteligente e amada do mundo mágico agora nas suas mãos. Crie aventuras por Hogwarts com Hermione e seu companheiro Bichento.  ', 'img/produtos/13.jpg', 'img/produtos/14.jpg', 'img/produtos/15.jpg'],
        ['4', 'Batman', 7, 5, 'Criança', 14, 51.69, 'Sunny ', 'Plástico ', 'Lute batalhas icônicas e incríveis com seu herói favorito da DC Comics: The Batman.  ', 'img/produtos/16.jpg', 'img/produtos/17.jpg', 'img/produtos/18.jpg'],
        ['4', 'Omnitrix Lançador de Discos', 7, 5, 'Criança', 103, 120.85, 'Sunny ', 'Plástico ', 'Escolha seu alien favorito no Omnitrix Lançador de Discos e se prepare para vencer os oponentes que surgirem em seu caminho.', 'img/produtos/19.jpg', 'img/produtos/20.jpg', 'img/produtos/21.jpg'],
        ['4', 'Conjunto de Jogos dos Vingadores', 8, 3, 'Criança', 28, 99.99, 'Toyster', 'Papel ', 'Um super kit com um quebra-cabeça de 200 peças, jogo da memória com 20 pares e um dominó com 28 peças. Tudo isso com seus heróis favoritos. ', 'img/produtos/22.jpg', 'img/produtos/23.jpg', 'img/produtos/24.jpg'],
        ['4', 'Pantera Negra', 7, 5, 'Criança', 76, 210.25, 'Mimo', 'Vinil ', 'Boneco articulado do herói Pantera Negra dos Vingadores no filme Ultimato. ', 'img/produtos/25.jpg', 'img/produtos/26.jpg', 'img/produtos/27.jpg'],
        ['4', 'Pelúcia Capitão América', 1, 5, 'Criança', 26, 123.69, 'Brand New', 'Algodão ', 'Uma pelúcia adoravelmente fofa do super-herói Capitão América para se divertir e abraçar bem forte.', 'img/produtos/28.jpg', 'img/produtos/29.jpg', 'img/produtos/30\r\n.jpg'],
        ['1', 'Mini Castelo Mágico da Elsa', 7, 5, 'Criança', 8, 310.99, 'Alfabay', 'Plástico ', 'Divirta-se com Elsa do filme Frozen: Uma Aventura Congelante e seu incrível castelo mágico cheio de acessórios super congelantes e fofos.', 'img/produtos/31.jpg', 'img/produtos/32.jpg', 'img/produtos/33.jpg'],
        ['1', 'Castelo de Celebrações Portátil', 7, 5, 'Criança', 78, 218.75, 'Disney Girls', 'Plástico ', 'Um castelo real incrível para realizar as celebrações das suas princesas favoritas com muitos acessórios e uma alça para que você possa levar para qualquer lugar. ', 'img/produtos/34.jpg', 'img/produtos/35.jpg', 'img/produtos/36.jpg'],
        ['1', 'Moana Bebê', 7, 1, 'Criança', 14, 132.29, 'Cotiplás', 'Vinil ', 'Venha viver um mar de aventuras com a pequena Moana, de movimentos articulados, super fofa e cheia de detalhes.', 'img/produtos/37.jpg', 'img/produtos/38.jpg', 'img/produtos/39.jpg'],
        ['1', 'Quebra-Cabeça da Bela', 8, 7, 'Criança', 99, 29.99, 'Toyster', 'Papel', 'Divirta-se com o lindo quebra-cabeça da princesa Bela, com duzentas peças para montar sozinho ou com toda a família.', 'img/produtos/40.jpg', 'img/produtos/41.jpg', 'img/produtos/42.jpg'],
        ['1', 'Kit Miniatura Princesas da Disney', 7, 5, 'Criança', 72, 165.19, 'Disney', 'PVC', 'Kit com oito lindas princesas da Disney em miniatura para colecionar. Vem com as personagens Cinderela, Rapunzel, Bela, Aurora, Jasmine, Tiana, Branca de Neve e Ariel.', 'img/produtos/43.jpg', 'img/produtos/44.jpg', 'img/produtos/45.jpg'],
        ['2', 'Coleção Carrinhos da Hot Wheels', 7, 5, 'Criança', 201, 245.23, 'Hot Wheels', 'Metal, plástico e papel', 'Coleção com 20 unidades de carrinhos da Hot Wheels para altas aventuras sobre rodas.', 'img/produtos/46.jpg', 'img/produtos/47.jpg', 'img/produtos/47.jpg'],
        ['2', 'Caminhão Maleta', 7, 5, 'Criança', 85, 182.57, 'DM Toys', 'Plástico', 'Caminhão de Bombeiros que serve de para um kit de cinco carrinhos, um helicóptero e diversos acessórios como placas e cones. Tudo isso para garantir diversão e aventuras.', 'img/produtos/49.jpg', 'img/produtos/50.jpg', 'img/produtos/51.jpg'],
        ['2', 'Garagem da Hot Wheels', 7, 5, 'Criança', 17, 204.99, 'Hot Wheels', 'Plástico ', 'Garagem da Hot Wheels com vários andares e um elevador para estacionar seus carrinhos enquanto esperam pela próxima aventura sobre rodas. ', 'img/produtos/52.jpg', 'img/produtos/53.jpg', 'img/produtos/54.jpg'],
        ['2', 'Carro de Polícia', 7, 9, 'Criança', 69, 81.95, 'Roma Jensen', 'Polipropileno', 'Uma incrível picape policial na cor preta e cheia de adesivos para garantir a diversão e fazer com que as perseguições policiais se tornem únicas.', 'img/produtos/55.jpg', 'img/produtos/56.jpg', 'img/produtos/57.jpg'],
        ['2', 'Relâmpago McQueen', 7, 5, 'Criança', 93, 155.99, 'Toyng', 'Plástico', 'Carro Relâmpago McQueen do Filme Carros. Diversão garantida com as rodas à fricção, garantindo velocidade em todas as corridas disputadas.', 'img/produtos/58.jpg', 'img/produtos/59.jpg', 'img/produtos/60.jpg'],
        ['5', 'Caiu Perdeu', 4, 1, 'Pré-adolescente', 127, 22.55, 'Pais e Filhos', 'Madeira de Engenharia', 'Um jogo divertido para colocar em cheque a coordenação motora da galera ao retirar e colocar as peças sem derrubar os outros blocos empilhados.', 'img/produtos/61.jpg', 'img/produtos/62.jpg', 'img/produtos/63.jpg'],
        ['5', 'Uno Minimalista', 8, 1, 'Adolescente', 198, 29.99, 'UNO', 'Papel', 'Diversão e competição para toda a família e amigos com o Uno Minimalista. Cheio de detalhes e com um design totalmente novo especialmente para você. ', 'img/produtos/64.jpg', 'img/produtos/65.jpg', 'img/produtos/66.jpg'],
        ['5', 'Perguntados', 3, 2, 'Pré-adolescente', 24, 72.81, 'Copag', 'Papelão', 'Desafie seus conhecimentos com a nova versão desse jogo de perguntas e respostas de diversas áreas como Entretenimento, História, Esportes, Arte, Geografia e Ciência. ', 'img/produtos/67.jpg', 'img/produtos/68.jpg', 'img/produtos/69\r\n.jpg'],
        ['5', 'Xadrez de O Senhor dos Anéis', 8, 1, 'Adolescente', 56, 329.89, 'The Noble Collection', 'Resina, tecido e papel', 'Batalhe pelo bem ou pelo mal da Terra Média com o xadrez cheio de detalhes de O Senhor dos Anéis. ', 'img/produtos/70.jpg', 'img/produtos/71.jpg', 'img/produtos/72.jpg'],
        ['5', 'Dominó das Frutas', 8, 2, 'Pré-adolescente', 110, 27.99, 'Toyster', 'Papelão', 'Divirta-se e aprenda com o dominó a reconhecer o nome das frutas tanto em inglês quanto em português enquanto testa seu raciocínio, vencendo seus oponentes.', 'img/produtos/73.jpg', 'img/produtos/74.jpg', 'img/produtos/75.jpg'],
        ['5', 'Cara a Cara Toy Story 4', 3, 2, 'Pré-adolescente', 72, 95.79, 'Estrela', 'Cartonado e plástico', 'O desafio é garantido nesse jogo onde os oponentes ficam cara a cara e tentam descobrir qual é o personagem um do outro através de perguntas.', 'img/produtos/76.jpg', 'img/produtos/77.jpg', 'img/produtos/78.jpg'],
        ['3', 'Patrick Estrela', 7, 5, 'Criança', 9, 94.18, 'Líder Brinquedos', 'Vinil', 'O brinquedo ideal para todos os fãs de Bob Esponja chegou: boneco Patrick Estrela articulado, trazendo consigo toda a nostalgia da Fenda do Biquíni.', 'img/produtos/79.jpg', 'img/produtos/80.jpg', 'img/produtos/81.jpg'],
        ['6', 'Funko Pop Noiva Cadáver', 7, 5, 'Pré-adolescente', 74, 242.15, 'Funko', 'Vinil', 'Agora Emily, de A Noiva Cadáver está prontinha para fazer parte da sua coleção de Funkos. Cheia de detalhes e pronta para o casamento bem na sua estante. ', 'img/produtos/82.jpg', 'img/produtos/83.jpg', 'img/produtos/84.jpg'],
        ['3', 'Pelúcia Chase da Patrulha Canina ', 1, 5, 'Criança', 99, 97.49, 'Sunny', 'Fibras', 'Juntamente com Chase e seus amigos, venha se juntar às aventuras da Patrulha Canina para salvar o dia.', 'img/produtos/85.jpg', 'img/produtos/86.jpg', 'img/produtos/87.jpg'],
        ['6', 'Action Figure da Sailor Moon', 7, 5, 'Adolescente', 59, 1119.21, 'Bandai Spirits', 'PVC', 'O que acha de iniciar uma coleção de action figures com a linda Action Figure da Sailor Moon? Beleza e criatividade bem na sua estante!.', 'img/produtos/88.jpg', 'img/produtos/89.jpg', 'img/produtos/90.jpg'],
        ['3', 'Sasuke Uchiha', 7, 5, 'Pré-adolescente', 78, 213.15, 'Fun', 'Plástico', 'Participe de muitas missões e aventuras com o boneco articulado Sasuke, o ninja mais poderoso do clã Uchiha.', 'img/produtos/91.jpg', 'img/produtos/92.jpg', 'img/produtos/93.jpg'],
        ['3', 'Baby Yoda de Star Wars', 7, 5, 'Pré-adolescente', 109, 165.15, 'Mattel', 'Plástico', 'Tenha sua própria versão do adorável Baby Yoda de Star Wars para apertar e chamar de seu.', 'img/produtos/94.jpg', 'img/produtos/95.jpg', 'img/produtos/96.jpg'],
        ['3', 'Funko Pop Geralt de Rívia', 7, 5, 'Adolescente', 18, 145.95, 'Funko', 'Vinil', 'O grande bruxo de Rívia agora pode se juntar à sua coleção. Diretamente do universo de The Witcher e cheio de detalhes.', 'img/produtos/97.jpg', 'img/produtos/98.jpg', 'img/produtos/99.jpg'],
    ];
    
    public function run()
    {
        foreach(self::$produtos as $produto)
        {
            DB::table('produtos')->insert([
                'id_category' => $produto[0],
                'name' => $produto[1],
                'id_type1' => $produto[2],
                'id_type2' => $produto[3],
                'age_range' => $produto[4],
                'qtdd' => $produto[5],
                'price' => $produto[6],
                'maker' => $produto[7],
                'material' => $produto[8],
                'description' => $produto[9],
                'img1' => $produto[10],
                'img2' => $produto[11],
                'img3' => $produto[12],
            ]);
        }
    }
}