<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toys = [
                // Toys for ages 0 and up
                [
                    'name' => "Rattle",
                    'description' => "Colorful rattle that stimulates the baby's senses.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336018/ChristmasToyFactory/Rattle.jpg"
                ],
                [
                    'name' => "Soft Plush",
                    'description' => "Soft plush toy with textures and contrasting colors.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/SoftPlush.jpg"
                ],
                [
                    'name' => "Crib Mobile",
                    'description' => "Musical mobile with rotating figures for the crib.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CribMobile.jpg"
                ],
                [
                    'name' => "Plastic Books",
                    'description' => "Books for safe handling and exploration.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/PlasticBooks.jpg"
                ],
                [
                    'name' => "Large Stackable Blocks",
                    'description' => "Soft blocks to encourage motor skills.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/LargeStackableBlocks.jpg"
                ],
                [
                    'name' => "Interactive Play Mats",
                    'description' => "Mats with lights, sounds, and varied textures.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/InteractivePlayMats.jpg"
                ],
                [
                    'name' => "Unbreakable Baby Mirror",
                    'description' => "Mirror to safely encourage self-exploration.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/UnbreakableBabyMirror.jpg"
                ],

                // Toys for ages 7 and up
                [
                    'name' => "Advanced LEGO",
                    'description' => "LEGO set with challenging models.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/AdvancedLego.jpg"
                ],
                [
                    'name' => "Educational Board Game",
                    'description' => "Monopoly Junior for learning through play.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/EducationalBoardGame.jpg"
                ],
                [
                    'name' => "Experiment Kit",
                    'description' => "Kit for exploring science with fun experiments.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/ExperimentKit.jpg"
                ],
                [
                    'name' => "100-300 Piece Puzzles",
                    'description' => "Puzzles that stimulate logic and concentration.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/Puzzles.jpg"
                ],
                [
                    'name' => "Drawing and Craft Materials",
                    'description' => "Kits with watercolors, clay, and creative crafts.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CraftMaterials.jpg"
                ],
                [
                    'name' => "Bicycle",
                    'description' => "Vehicle to develop balance and physical activity.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/Bicycle.jpg"
                ],
                [
                    'name' => "Basic Tech Toys",
                    'description' => "Simple programmable robots or small drones.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/BasicTechToys.jpg"
                ],

                // Toys for ages 12 and up
                [
                    'name' => "Camera Drone",
                    'description' => "Advanced drone with remote control and integrated camera.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/CameraDrone.jpg"
                ],
                [
                    'name' => "Strategy Game",
                    'description' => "Board game like Catan to develop strategic skills.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/StrategyGame.jpg"
                ],
                [
                    'name' => "Robotics Kit",
                    'description' => "Arduino kit to learn robotics and programming.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/RoboticsKit.jpg"
                ],
                [
                    'name' => "Video Games",
                    'description' => "Adventure or strategy titles suitable for teenagers.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/VideoGames.jpg"
                ],
                [
                    'name' => "Basic Musical Instruments",
                    'description' => "Guitars, keyboards, or electric drums for beginners.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/BasicMusicalInstruments.jpg"
                ],
                [
                    'name' => "Sports Games",
                    'description' => "Balls, rackets, or accessories for specific sports.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/SportsGames.jpg"
                ],
                [
                    'name' => "Youth Books",
                    'description' => "Series like Harry Potter, Percy Jackson, or graphic novels.",
                    'image' => "",
                    'minimum_age_id' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1734336150/ChristmasToyFactory/YouthBooks.jpg"
                ]
            ];

        foreach ($toys as $toy) {
            Toy::create($toy);
        }
    }
}
