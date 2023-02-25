<?php

namespace App\Http\ModelName;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Datebase\Eloquent\Model;

class ModelName extends Model
{
  use HasFactory;
  public static function date()
  {
    $content = [

      'head'=>'Jollyvers',
      'body'=>'Street Foods'

    ];
    return $content;
  }

  public static function about(){
    $AboutUs =[
      'head'=>'About our Street Foods',
      'body'=>'Our Street Foods business started on 2022, it all came from the idea of my brother who is a graduate on the course financial management, his idea came up to an action thats why we decided we put it into business and make a small store.

      We guarantee a good quality street foods products. We ensure you a fresh and quality street foods you will ever had, our stocks provider is the most trusted street foods dealer in the Country. We also assure to serve you the best we can do'
    ];
    return $AboutUs;
  }

  public static function Products(){
    $Products=[
      'head'=>'Street Foods',
      'body'=>'The most well-known lumpia variety is lumpiang Shanghai, a crispy deep-fried Filipino snack that originated as Chinese spring rolls. Although there are many different kinds of lumpia, the Shanghai version is distinguished by a savory filling made of ground pork or beef, carrots, onions, different seasonings, and (rarely) shrimp. Lumpiang Shanghai is a common dish served on special and festive occasions, but it is also frequently sold at numerous street stalls across the nation. Typically, a sweet and sour dipping sauce is served with this delectable and crispy snack.

      Kwek-kwek, Quail eggs coated in an orange batter and deep-fried until perfectly golden. When served with spicy vinegar or a special dipping sauce, this popular street food from the Philippines is tasty and entertaining to eat.

      Filipinos also adored Japanese cuisine, particularly tempura. In the Philippines, tempura is a well-known street food, and the people there have their own tempura recipe and flavor. It is a fried Japanese dish that is either filled with batter-dipped vegetables or shelled shrimp. In the majority of the streets and open spaces in all of the provinces of the Philippines, you can find a wandering tempura vendor with his bike and cart. Since there are some tempura that are small and big, sizes are different precisely, but when its already been boiled, it will just sprout from its raw small size, vendors can cook tempura while you wait in just their stance or bikes, and you can also choose your tempura pieces from their basket.

      Isaw, a common street food in the Philippines, is made up of intestines from chicken and pork that have been marinated, boiled, and grilled. The intestines are typically coil-shaped and skewered on a stick. Despite being comparable, pork isaw is frequently a little bit bigger and chewier than the chicken variety. Typically, soy sauce, oil, ketchup, garlic, and seasonings are used to make the marinade. It is crucial to thoroughly clean and boil the intestines before grilling them because this gets rid of all pathogens that are transmitted through food.

      The wrapping is a very thin, round sheet of unleavened dough, with a pleat border. There is only one kind of filling, which mainly consists of chopped or minced mutton, scallion and ginger. Hohhot shaomai features this extensive use of scallion and ginger, creating a dense combined scent, and a slightly spicy taste. The filling is put in the center of the wrapping and the border of the wrapping is loosely gathered above, forming a "neck" and a flower shaped top. It is then cooked by steaming or pan-frying.'
    ];
    return $Products;
}

public static function Store(){
  $Store =[
    'head'=>'Come In',
    'body'=>'Sunday
    8:00 AM to 7:00 PM
    Monday
    1:00 PM to 8:00 PM
    Tuesday
    1:00 PM to 8:00 PM
    Wednesday
    1:00 PM to 8:00 PM
    Thursday
    1:00 PM to 8:00 PM
    Friday
    1:00 PM to 8:00 PM
    Saturday
    1:00 PM to 8:00 PM
    Perino Street, Sumpong,
    Malaybalay City, Bukidnon
    
    Phone Number
    09639690099'
  ];
  return $Store;
}



