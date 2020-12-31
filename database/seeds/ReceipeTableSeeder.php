<?php

use Illuminate\Database\Seeder;
use App\Receipe;

class ReceipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $receipes = [
            [
                'id'    => 1,
                'title_en' => 'Chinese Noodles',
                'title_fr' => 'Nouilles Chinoises',
                'ingradients_en' => 
                	'7 ounces steam fried Chinese noodles <br>
					6 slices ginger <br>
					2 stalks green onions (cut in 1-inch strips) <br>
					3 tablespoons oil <br>
					3 tablespoons oyster sauce <br>
					2 tablespoons soya sauce <br>
					1 tablespoon sesame oil <br>',
                'ingradients_fr' => 
                	'7 onces de nouilles chinoises frites à la vapeur <br>
					6 tranches de gingembre <br>
					2 tiges d\'oignons verts (coupés en lanières de 1 pouce) <br>
					3 cuillères à soupe d\'huile <br>
					3 cuillères à soupe de sauce aux huîtres <br>
					2 cuillères à soupe de sauce soja <br>
					1 cuillère à soupe d\'huile de sésame <br>',
                'directions_en' => 
                	'1. Put noodles in 4 cups of salted boiling water. Cook 1-2 minutes. Stir occasionally. <br>
				    2. Drain and dry. <br>
				    3. Heat oil in wok or frypan until smoking hot. <br>
				    4. Add ginger and onion stir for 30 seconds. <br>
				    5. Add noodles and fry for 5 minutes over med heat. <br>
				    6. Add sauce, and stir until coated. <br>
				    7. Serve hot or cold. <br>',
                'directions_fr' => 
                	'1. Mettez les nouilles dans 4 tasses d\'eau bouillante salée. Cuire 1 à 2 minutes. Remuez de temps en temps. <br>
				    2. Égouttez et séchez. <br>
				    3. Chauffer l\'huile dans un wok ou une poêle jusqu\'à ce qu\'elle soit chaude. <br>
				    4. Ajouter le gingembre et l\'oignon en remuant pendant 30 secondes. <br>
				    5. Ajouter les nouilles et faire frire pendant 5 minutes à feu moyen. <br>
				    6. Ajouter la sauce et remuer jusqu\'à enrobage. <br>
				    7. Servir chaud ou froid. <br>',
            ],

            [
                'id'    => 2,
                'title_en' => 'Strawberry Cakes',
                'title_fr' => 'Gâteaux aux Fraises',
                'ingradients_en' => 
                	'1 quart fresh strawberries (or more if you like) <br>
				    1⁄2 cup sugar <br>
				    8 ounces cream cheese, softened <br>
				    1 cup powdered sugar <br>
				    1 (8 ounce) container frozen whipped topping <br>
				    1 (14 ounce) angel food cake, cut into cubes (I buy the cake already made) <br>',
                'ingradients_fr' => 
                	'1 litre de fraises fraîches (ou plus si vous le souhaitez) <br>
				    1⁄2 tasse de sucre <br>
				    8 onces de fromage à la crème, ramolli <br>
				    1 tasse de sucre en poudre <br>
				    1 contenant (8 onces) de garniture fouettée surgelée <br>
				    1 gâteau des anges (14 onces), coupé en cubes (j\'achète le gâteau déjà préparé) <br>',
                'directions_en' => 
                	'1. Wash, stem, and cut strawberries in half. <br>
				    2. Add sugar; toss to mix well. <br>
				    3. Chill. <br>
				    4. Beat cream cheese and powdered sugar well. <br>
				    5. Fold in whipped topping and cake cubes. <br>
				    6. Spread cake into an ungreased 13x9 dish. <br>
				    7. Cover and chill for at least 2 hours. <br>
				    8. Cut cake into squares; top with strawberries. <br>',
                'directions_fr' => 
                	'1. Lavez, égouttez et coupez les fraises en deux. <br>
				    2. Ajouter le sucre; remuer pour bien mélanger. <br>
				    3. Chill. <br>
				    4. Bien battre le fromage à la crème et le sucre en poudre. <br>
				    5. Incorporer la garniture fouettée et les cubes de gâteau. <br>
				    6. Étalez le gâteau dans un plat 13x9 non graissé. <br>
				    7. Couvrir et réfrigérer pendant au moins 2 heures. <br>
				    8. Coupez le gâteau en carrés; garnir de fraises. <br>
				',
            ],
        ];

        Receipe::insert($receipes);
    }
}
