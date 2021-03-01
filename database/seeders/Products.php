<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products') -> insert([
            
            [
            'name'=>'Basset hound',
            'price'=>'150',
            'description'=>'The basset hound are popularly known for their long ears and cute puppy dog eyes.',
            'gallery'=>'images/basset_hound_copy.jpg'
        ],
        [
            'name'=>'Australian Cattle',
            'price'=>'350',
            'description'=>'This breed can be blue or red, a mottled or speckled pattern, with or without black, blue, or tan markings.',
            'gallery'=>'images/australian_cattle_dog.jpg'
        ],
        [
            'name'=>'Labrador Retriever',
            'price'=>'200',
            'description'=>'The sweet-faced, lovable Labrador Retriever is America’s most popular dog breed. Labs are friendly, outgoing, and high-spirited companions who have more than enough affection to go around for a family looking for a medium-to-large dog.',
            'gallery'=>'images/black_lab_cute_puppies.jpg'
        ],
        [
            'name'=>'Border Collie',
            'price'=>'1070.99',
            'description'=>'The Border Collie Borders are athletic, medium-sized herders standing 18 to 22 inches at the shoulder.',
            'gallery'=>'images/border_collie_cute_puppies.jpg'
        ],

        [
            'name'=>'Labrador Retriever',
            'price'=>'300',
            'description'=>'The sweet-faced, lovable Labrador Retriever is America’s most popular dog breed. Labs are friendly, outgoing, and high-spirited companions who have more than enough affection to go around for a family looking for a medium-to-large dog.',
            'gallery'=>'images/chocolate_lab_cute_puppies.jpg'
        ],

        [
            'name'=>'Dachshund',
            'price'=>'500',
            'description'=>'The Dachshund is described as clever, lively, and courageous to the point of rashness.',
            'gallery'=>'images/dachshund_cuite_puppies.jpg'
        ],
        [
            'name'=>'French Bulldog',
            'price'=>'750',
            'description'=>'The French Bulldog has the appearance of an active, intelligent, muscular dog of heavy bone, smooth coat, compactly built, and of medium or small structure.',
            'gallery'=>'images/french_bulldog_cute_puppies.jpg'
        ],
        [
            'name'=>'German Shepherd',
            'price'=>'950',
            'description'=>'Its coat is of coarse, medium-long outer hair and shorter, dense inner hair and ranges from white or pale gray to black and is often gray and black or black and tan.',
            'gallery'=>'images/german_shepherd.jpg'
        ],

        [
            'name'=>'Golden Retriever',
            'price'=>'200',
            'description'=>'The Golden Retriever is a sturdy, muscular dog of medium size, famous for the dense, lustrous coat of gold that gives the breed its name.',
            'gallery'=>'images/golden_retriever_cute_puppies.jpg'
        ],
        [
            'name'=>'Irish Setter',
            'price'=>'350',
            'description'=>'The Irish Setter is an active, aristocratic bird dog, rich red in color, substantial yet elegant in build.',
            'gallery'=>'images/irish_setter_cute_puppies.jpg'
        ],
        [
            'name'=>'Leonberger',
            'price'=>'1000',
            'description'=>'A huge and powerful dog, yes, but the Leonberger is also known for his aristocratic grace and elegance.',
            'gallery'=>'images/leonberger_cute_puppies.jpg'
        ],
        [
            'name'=>'Papillon',
            'price'=>'950',
            'description'=>'The quick, curious Papillon is a toy dog of singular beauty and upbeat athleticism.',
            'gallery'=>'images/papillon_cute_puppies.jpg'
        ],
        [
            'name'=>'Pomeranian',
            'price'=>'1750',
            'description'=>'The Pomeranian is a compact, short-backed, active toy dog of Nordic descent.',
            'gallery'=>'images/pomeranian.jpg'
        ],
        [
            'name'=>'Poodle',
            'price'=>'1350',
            'description'=>'An elegant-looking dog, often ranked as one of the most intelligent of all breeds, the poodle has been bred in three size varieties—standard, miniature, and toy.',
            'gallery'=>'images/poodle_cute_puppies.jpg'
        ],
        [
            'name'=>'Siberian Husky',
            'price'=>'1500',
            'description'=>'The Siberian Husky is a medium-sized working dog, quick and light on his feet and free and graceful in action.',
            'gallery'=>'images/siberian_husky_cute_puppies.jpg'
        ],
        [
            'name'=>'Vizsla',
            'price'=>'145',
            'description'=>'The Vizsla is described as lively, gentle, and affectionate, with above-average learning ability and a strong desire to be with people.',
            'gallery'=>'images/vizsla_cute_puppies.jpg'
        ],
        [
            'name'=>'Wirehaired Pointing Griffon',
            'price'=>'1250',
            'description'=>'Griffons are medium-sized, all-purpose gundogs standing no higher than 24 inches at the shoulder.',
            'gallery'=>'images/wirehaired_pointing_griffon_cute_puppies.jpg'
        ]
        ]);
    }
}
