<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ProductSeeder extends Seeder
{
    public function run()
    {
         $products = [
            [
                'id' => 1,
                'name' => 'Napa 500',
                'slug' => 'napa-500',
                'description' => 'Napa 500 500mg is a medicine used to relieve pain and to reduce fever. It is used to treat many conditions such as headache, body ache, toothache and common cold.Napa 500 may be prescr500mg ibed alone or in combination with another medicine. You should take it regularly as advised by your doctor. It is usually best taken with food otherwise it may upset your stomach. Do not take more or use it for longer than recommended. Side effects are rare if this medicine is used correctly but this medicine may cause stomach pain, nausea, and vomiting in some people. Consult your doctor if any of these side effects bother you or do not go away.This medicine is widely prescribed and considered safe but is not suitable for everybody. Before taking it, let your doctor know if you have liver or kidney problems or are using blood-thinning medicines. It may affect the dose or suitability of this medicine. Let your doctor know about all the other medicines you are taking because they may affect, or be affected by, this medicine.',
                'type_id' => 5,
                'price' => 2.00,
                'shop_id' => 6,
                'sale_price' => 1.60,
                'min_price' => 2.00,
                'max_price' => 2.00,
                'sku' => '1',
                'quantity' => 18,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1lb',
                'height' => null,
                'width' => null,
                'length' => null,

                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/napa.png',
                    'thumbnail' => '/assets/uploads/products/napa.png'
                ]),
                'video' => null,
                'gallery' => json_encode([
                    ['id' => '573', 'original' => '/assets/uploads/products/napa.png', 'thumbnail' => '/assets/uploads/products/napa.png'],
                    ['id' => '574', 'original' => '/assets/uploads/products/napa.png', 'thumbnail' => '/assets/uploads/products/napa.png']
                ]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => '2021-03-08 10:24:53',
                'updated_at' => '2021-12-23 18:16:06'
            ],
            [
                'id' => 2,
                'name' => 'Napa Extend',
                'slug' => 'napa-extend',
                'description' => 'Napa Extend 665mg is a medicine used to relieve pain and to reduce fever. It is used to treat many conditions such as headache, body ache, toothache and common cold.Napa Extend may be prescr665mg ibed alone or in combination with another medicine. You should take it regularly as advised by your doctor. It is usually best taken with food otherwise it may upset your stomach. Do not take more or use it for longer than recommended. Side effects are rare if this medicine is used correctly but this medicine may cause stomach pain, nausea, and vomiting in some people. Consult your doctor if any of these side effects bother you or do not go away.This medicine is widely prescribed and considered safe but is not suitable for everybody. Before taking it, let your doctor know if you have liver or kidney problems or are using blood-thinning medicines. It may affect the dose or suitability of this medicine. Let your doctor know about all the other medicines you are taking because they may affect, or be affected by, this medicine.',
                'type_id' => 5,
                'price' => 0.60,
                'shop_id' => 6,
                'sale_price' => null,
                'min_price' => 0.60,
                'max_price' => 0.60,
                'sku' => '2',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '2lb',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/napaextent.png',
                    'thumbnail' => '/assets/uploads/products/napaextent.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([
                    ['id' => '573', 'original' => '/assets/uploads/products/baby-spinach-1.png', 'thumbnail' => '/assets/uploads/products/napaextent.jpg'],
                    ['id' => '574', 'original' => '/assets/uploads/products/apple-2.png', 'thumbnail' => '/assets/uploads/products/napaextent.jpg']
                ]),

                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => '2021-03-08 10:26:13',
                'updated_at' => '2021-12-23 18:16:03'
            ],
            [
                'id' => 3,
                'name' => 'Doxicap 100mg Capsule',
                'slug' => 'doxicap-100mg-capsule',
                'description' => 'Doxicap 100 is an antibiotic medicine used to treat bacterial infections in your body. It is effective in some infections of the lungs, urinary tract, eyes, and others. It kills bacteria, which helps to improve your symptoms and cure the infection. Doxicap 100 is also used to treat many sexually transmitted diseases and a skin condition known as acne. It should be taken preferably either one hour before or 2 hours after a meal. You should take it regularly at evenly spaced intervals as per the schedule prescribed by your doctor. Taking it at the same time every day will help you to remember to take it. The dose will depend on what you are being treated for, but you should always complete a full course of this antibiotic as prescribed by your doctor. Do not stop taking it until you have finished, even when you feel better. If you stop taking it early, some bacteria may survive and the infection may come back. Commonly seen side effects seen with this medicine include vomiting, nausea, and diarrhea. These are usually temporary and subside with the completion of treatment. Consult your doctor if you find these side effects bother or worry you. Inform your doctor if you have any previous history of allergy to any antibiotic before taking this medicine. You should also let your doctor know all other medicines you are taking as they may affect, or be affected by this medicine. Pregnant or breastfeeding women should consult their doctor before using it. It may blur your vision or make you feel sleepy and dizzy. Do not drive if these symptoms occur.',
                'type_id' => 5,
                'price' => 3.00,
                'shop_id' => 6,
                'sale_price' => null,
                'min_price' => 3.00,
                'max_price' => 3.00,
                'sku' => '3',
                'quantity' => 30,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1lb',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/Doxicap-100mg-Capsule.png',
                    'thumbnail' => '/assets/uploads/products/Doxicap-100mg-Capsule.jpg'
                ]),

                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => '2021-03-08 10:40:00',
                'updated_at' => '2021-12-23 18:16:00'
            ],
            [
                'id' => 899,
                'name' => 'Bizoran 5/20 5mg+20mg Tablet',
                'slug' => 'bizoran-5mg+20mg-tablet',
                'description' => 'Bizoran 5/20 contains two medicines, both of which help to control high blood pressure. Lowering blood pressure helps to reduce your risk of having a heart attack or a stroke in the future. Bizoran 5/20 may be taken on an empty stomach or along with food. However, it is better to take it regularly at a fixed time each day, as prescribed by your doctor. The dose will depend on your condition and how you respond to the medicine. It is important to keep taking this medicine even if you feel well. By lowering your blood pressure, it is reducing your risk of heart attack or stroke so do not stop taking it unless your doctor tells you to. You can help this medicine work better by making a few changes to your lifestyle by being active, stopping smoking and eating low salt and low-fat diet. The most common side effects of this medicine include swelling in your ankles or feet (edema), sleepiness, dizziness, headache, taste change, upset stomach, and tiredness. Since it may cause sleepiness and dizziness, do not drive or do anything requiring concentration until you know how it affects you. Talk to your doctor if any of the side effects bother you or do not go away. Before taking this medicine, let your doctor know if you have any kidney or liver problems or severe dehydration. Pregnant or breastfeeding women should also consult their doctor before taking it. While using this medicine, your blood pressure will be monitored regularly and your kidney function may also need to be tested.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '899',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

                // ✅ Local path ব্যবহার করা হলো
                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/Bizoran-10-20.png',
                    'thumbnail' => '/assets/uploads/products/Bizoran-10-20.jpg'
                ]),

                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Sergel 20mg Capsule',
                'slug' => 'sergel-20mg-capsule',
                'description' => 'Sergel 20 is a medicine which reduces the amount of acid produced in your stomach. It is used to treat heartburn, acid reflux and problems in your food pipe. It is also used to prevent and treat stomach ulcers. You should take Sergel 20 as your doctor advises. The dose will depend on what you are being treated for, but it should be the lowest dose for the shortest amount of time needed to treat your condition. Normally it should be swallowed whole about an hour before a meal and at the same time each day. It may take up to a few weeks to work properly but your doctor will tell you how long you need to be taking it for. You should keep on taking it as prescribed even if your symptoms disappear quickly. If you are taking this medicine for a long time, your doctor may carry out regular tests to check your levels of magnesium which can fall with this medicine. Common side effects include headache, constipation or diarrhoea, stomach pain and feeling or being sick. These tend to be mild but talk to your doctor if they bother you or do not go away.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '4',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,


                // ✅ Local path ব্যবহার করা হলো
                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/Sergel-20mg-Capsule.png',
                    'thumbnail' => '/assets/uploads/products/Sergel-20mg-Capsule.jpg'
                ]),

                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Apetiz 200mg/5ml Oral Suspension',
                'slug' => 'apetiz-200mg/5ml-oral-suspension',
                'description' => 'Apetiz is used to treat breast cancer and endometrial cancer. It specifically helps treat breast and endometrial cancer that are hormone dependent. It may also be used for treating low appetite and weight loss in patients with advanced cancer or HIV. Apetiz should be taken with or without food, preferably at a fixed time each day to ensure consistent levels of medicine in the body. This medicine is not used for pregnant or breastfeeding women. It may cause side effects like high blood pressure and increased blood sugar levels but they are temporary. However, if these persists, consult with the doctor.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '5',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

               'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Cef-3 200mg Capsule',
                'slug' => 'cef-3-200mg-capsule',
                'description' => 'Cef-3 200 is an antibiotic belonging to the cephalosporin group, which is used to treat a variety of bacterial infections. It is effective in infections of the respiratory tract (eg. pneumonia), urinary tract, ear, nasal sinus, throat, and some sexually transmitted diseases. Cef-3 200 may be taken on an empty stomach or without food. You should take it regularly at evenly spaced intervals as per the schedule prescribed by your doctor. Taking it at the same time every day will help you remember to take it. The dose will depend on what you are being treated for, but you should always complete the full course of this antibiotic as prescribed by your doctor. Do not stop taking it until you have finished, even when you feel better. If you stop taking it early, some bacteria may survive and the infection may come back or worsen. It will not work for viral infections such as flu or common cold. Using any antibiotic when you do not need it can make it less effective for future infections. The most common side effects of this medicine include vomiting, nausea, stomach pain, indigestion, and diarrhea. These are usually mild but let your doctor know if they bother you or do not go away. Before taking it, you should let your doctor know if you are allergic to any antibiotics or have any kidney or liver problems. You should also let your healthcare team know all other medicines you are taking as they may affect, or be affected by this medicine. This medicine is generally regarded as safe to use during pregnancy and breastfeeding if prescribed by a doctor.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '6',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/Cef-3-200mg-Capsule.png',
                    'thumbnail' => '/assets/uploads/products/Cef-3-200mg-Capsule.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 21,
                'name' => 'Ramoril 1.25 1.25mg Tablet',
                'slug' => 'ramoril-1.25-1.25mg-tablet',
                'description' => 'Ramoril 1.25 belongs to a group of medicines known as angiotensin converting enzyme (ACE) inhibitors. It is widely used to treat high blood pressure and heart failure and may be prescribed after a heart attack. It also lowers the chances of having a heart attack or stroke. Ramoril 1.25 can be prescribed either alone or in combination with other medicines. It may be taken empty stomach or with a meal. This medicine should be taken at the same time each day to get the maximum benefit. It is important to continue taking it regularly even if you feel well or even if your blood pressure is controlled. Most people with high blood pressure do not feel any symptoms, but if you stop taking this medicine, your condition could get worse. This is a widely used medicine and is considered safe for long-term use. Making some changes in your lifestyle will also help lower your blood pressure. These may include regular exercise, losing weight, not smoking, reducing alcohol intake, and reducing the amount of salt in your diet as advised by your doctor. The most common side effects of this medicine include feeling dizzy or drowsy, headache, dry cough, fatigue, nausea, vomiting, diarrhea, stomach pain and low blood pressure. Most of these are temporary and resolve with time. Talk to your doctor if any of the side effects bother you or do not go away. Before taking this medicine, let your doctor know if you have any kidney or liver problems. Pregnant or breastfeeding mothers should also consult their doctor before taking it. Your doctor may check your kidney function, blood pressure and potassium levels in your blood at regular intervals while you are taking this medicine.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '21',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/ramoril-125-mg-tablet.webp',
                    'thumbnail' => '/assets/uploads/products/ramoril-125-mg-tablet.webp'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 43,
                'name' => 'Ramoril 5mg Tablet',
                'slug' => 'ramoril-5mg-tablet',
                'description' => 'Ramoril 5 belongs to a group of medicines known as angiotensin converting enzyme (ACE) inhibitors. It is widely used to treat high blood pressure and heart failure and may be prescribed after a heart attack. It also lowers the chances of having a heart attack or stroke. Ramoril 5 can be prescribed either alone or in combination with other medicines. It may be taken empty stomach or with a meal. This medicine should be taken at the same time each day to get the maximum benefit. It is important to continue taking it regularly even if you feel well or even if your blood pressure is controlled. Most people with high blood pressure do not feel any symptoms, but if you stop taking this medicine, your condition could get worse. This is a widely used medicine and is considered safe for long-term use. Making some changes in your lifestyle will also help lower your blood pressure. These may include regular exercise, losing weight, not smoking, reducing alcohol intake, and reducing the amount of salt in your diet as advised by your doctor. The most common side effects of this medicine include feeling dizzy or drowsy, headache, dry cough, fatigue, nausea, vomiting, diarrhea, stomach pain and low blood pressure. Most of these are temporary and resolve with time. Talk to your doctor if any of the side effects bother you or do not go away. Before taking this medicine, let your doctor know if you have any kidney or liver problems. Pregnant or breastfeeding mothers should also consult their doctor before taking it. Your doctor may check your kidney function, blood pressure and potassium levels in your blood at regular intervals while you are taking this medicine.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '43',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/ramoril-5-mg-tablet.webp',
                    'thumbnail' => '/assets/uploads/products/ramoril-5-mg-tablet.webp'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 65,
                'name' => 'Traxyl 500mg capsule',
                'slug' => 'traxyl-500mg-capsule',
                'description' => 'Traxyl 500 is used to treat bleeding. It helps to prevent or reduce bleeding in conditions like tooth removal, heavy periods, dysfunctional uterine bleeding, nosebleed and in any oral, prostate or bladder surgery. Traxyl 500 is an anti-fibrinolytic. It works by preventing the breakdown of clots which leads to stoppage of bleeding. This medicine must be taken in the dose and duration as advised by the doctor. You should not take it if you have any known allergy from this medicine. The most common side effects may be injection site reactions such as tiredness, nasal congestion or pain in muscle, bone or joint. Inform your doctor if you have undergone any cardiac surgery or you are suffering from any kidney disease. This medicine is safe to use in pregnant or breastfeeding mothers. It is also safe to use in patients suffering from liver diseases. It is advised not to consume alcohol after taking this medicine as there can be excessive drowsiness.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '65',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/traxyl-500-mg-capsule.jpg',
                    'thumbnail' => '/assets/uploads/products/traxyl-500-mg-capsule.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 102,
                'name' => 'Bislol 2.5 2.5mg Tablet',
                'slug' => 'bislol-2.5-2.5mg-tablet',
                'description' => 'Bislol 2.5 belongs to a group of medicines called beta-blockers. It is used to treat high blood pressure (hypertension), angina (heart-related chest pain), irregular heart rhythms (arrhythmia). It also helps to prevent future heart attacks and stroke and to prevent migraine. Bislol 2.5 is also used to relieve the symptoms caused by an overactive thyroid gland. It may be prescribed alone or together with other medications. The dose and frequency depend on what you are taking it for and the severity of your condition. It may be taken empty stomach or with a meal, but take it regularly at the same time each day to get the most benefit. It may take several weeks before you get the full benefit of this medicine and you may need to take it for the rest of your life. However, it is important to continue taking it even if you feel well. Most people with high blood pressure do not feel ill and if you stop taking it, your condition may worsen. The main side effects of this medicine are fatigue, headache, slow heart rate, feeling dizzy, and nausea. These are usually mild and short-lived. It may also cause shortness of breath or low blood pressure in some people. To reduce the risk of side effects your doctor will probably start the medicine at a low dose and gradually increase it. Consult your doctor if the side effects bother you or do not go away. Before taking it, let your doctor know if you have any liver problems. It may also not be suitable for people who have a slow heart rate, severe circulation problems, severe heart failure, or low blood pressure. Pregnant or breastfeeding mothers should also consult their doctor before taking it. You must talk to your doctor to find out whether this medicine is suitable for you to use. You should have your blood pressure checked regularly to make sure that this medicine is working properly. Avoid drinking alcohol as it may increase certain side effects.',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '102',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
               'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 110,
                'name' => 'Cardiron 200mg Tablet',
                'slug' => 'Cardiron 200mg Tablet',
                'description' => 'Ventricular Arrhythmias PO Load: 800-1600 mg PO qDay for 1-3 weeks until response; once adequate arrhythmia control achieved, reduce dose to 600-800 mg/day for 1 mo; THEN reduce to maintenance dose Maintenance dose: 400 mg PO qDay IV 150 mg over first 10 min (15mg/min), followed by 360 mg over next 6 hr (1 mg/min), THEN 540 mg over remaining 18 hr (0.5 mg/min), for a total of 1000 mg over 24 hr before administering maintenance infusion Maintenance: 0.5 mg/min for a total 720 mg/24hr at a concentration of 1-6 mg/mL (360 mg/200mL), or 1.8 mg/mL Nexterone at rate of 278 mL/min Duration of therapy',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '110',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
               'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 412,
                'name' => 'Product 412',
                'slug' => 'product-412',
                'description' => 'Description for product 412',
                'type_id' => 1,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '412',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 467,
                'name' => 'Product 467',
                'slug' => 'product-467',
                'description' => 'Description for product 467',
                'type_id' => 1,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '467',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 888,
                'name' => 'Product 888',
                'slug' => 'product-888',
                'description' => 'Description for product 888',
                'type_id' => 1,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '888',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
              'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 891,
                'name' => 'Product 891',
                'slug' => 'product-891',
                'description' => 'Description for product 891',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '891',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,

               'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 883,
                'name' => 'Product 883',
                'slug' => 'product-883',
                'description' => 'Description for product 883',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '883',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([
                    ['id' => '573', 'original' => '/assets/uploads/products/baby-spinach-1.png', 'thumbnail' => '/assets/uploads/products/baby-spinach-1-thumbnail.jpg'],
                    ['id' => '574', 'original' => '/assets/uploads/products/apple-2.png', 'thumbnail' => '/assets/uploads/products/apple-2-thumbnail.jpg']
                ]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 884,
                'name' => 'Product 884',
                'slug' => 'product-884',
                'description' => 'Description for product 884',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '884',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                  'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 885,
                'name' => 'Product 885',
                'slug' => 'product-885',
                'description' => 'Description for product 885',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '885',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/apple-1.png',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 173,
                'name' => 'Product 173',
                'slug' => 'product-173',
                'description' => 'Description for product 173',
                'type_id' => 5,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '173',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                 'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/Apples.jpg',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 946,
                'name' => 'Product 946',
                'slug' => 'product-946',
                'description' => 'Description for product 946',
                'type_id' => 1,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '946',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
              'image' => json_encode([
                'id' => '1',
                'original' => '/assets/uploads/products/Apples.jpg',
                'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
            ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 943,
                'name' => 'Product 943',
                'slug' => 'product-943',
                'description' => 'Description for product 943',
                'type_id' => 1,
                'price' => 10.00,
                'shop_id' => 1,
                'sale_price' => null,
                'min_price' => 10.00,
                'max_price' => 10.00,
                'sku' => '943',
                'quantity' => 10,
                'in_stock' => true,
                'is_taxable' => false,
                'shipping_class_id' => null,
                'status' => 'publish',
                'product_type' => 'simple',
                'unit' => '1pc',
                'height' => null,
                'width' => null,
                'length' => null,
                'image' => json_encode([
                    'id' => '1',
                    'original' => '/assets/uploads/products/Apples.jpg',
                    'thumbnail' => '/assets/uploads/products/apple-1-thumbnail.jpg'
                ]),
                'video' => null,
                'gallery' => json_encode([]),
                'author_id' => null,
                'manufacturer_id' => null,
                'is_digital' => false,
                'is_external' => false,
                'external_product_url' => null,
                'external_product_button_text' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

            DB::table('products')->insert($products);


        // $localPath = public_path('assets/uploads/products');
        // if (!file_exists($localPath)) {
        //     mkdir($localPath, 0755, true);
        // }

        // foreach ($products as &$product) {
        //     // ✅ ডাউনলোড প্রাইমারি image
        //     $remoteUrl = $product['image'];
        //     if ($remoteUrl) {
        //         try {
        //             $response = Http::get($remoteUrl);
        //             if ($response->successful()) {
        //                 $filename = basename(parse_url($remoteUrl, PHP_URL_PATH)) ?: Str::uuid() . '.jpg';
        //                 file_put_contents($localPath . '/' . $filename, $response->body());
        //                 $product['image'] = 'assets/uploads/products/' . $filename; // local path হিসেবে replace
        //             } else {
        //                 $product['image'] = null;
        //             }
        //         } catch (\Exception $e) {
        //             $product['image'] = null;
        //         }
        //     }

        //     // ✅ ডাউনলোড gallery images
        //     // ✅ ডাউনলোড gallery images
        //     $gallery = [];
        //     $galleryItems = is_string($product['gallery']) ? json_decode($product['gallery'], true) : $product['gallery'];

        //     if (is_array($galleryItems)) {
        //         foreach ($galleryItems as $img) {
        //             $remoteUrl = $img['original'] ?? null;
        //             if ($remoteUrl) {
        //                 try {
        //                     $response = Http::get($remoteUrl);
        //                     if ($response->successful()) {
        //                         $filename = basename(parse_url($remoteUrl, PHP_URL_PATH)) ?: Str::uuid() . '.jpg';
        //                         file_put_contents($localPath . '/' . $filename, $response->body());

        //                         $thumbnailUrl = $img['thumbnail'] ?? $remoteUrl;
        //                         $thumbFilename = basename(parse_url($thumbnailUrl, PHP_URL_PATH)) ?: Str::uuid() . '-thumb.jpg';
        //                         file_put_contents($localPath . '/' . $thumbFilename, Http::get($thumbnailUrl)->body());

        //                         $gallery[] = [
        //                             'id' => $img['id'],
        //                             'original' => 'assets/uploads/products/' . $filename,
        //                             'thumbnail' => 'assets/uploads/products/' . $thumbFilename,
        //                         ];
        //                     }
        //                 } catch (\Exception $e) {
        //                     // ignore
        //                 }
        //             }
        //         }
        //     }

        //     $product['gallery'] = json_encode($gallery); // JSON column
        // }

        // // ✅ Insert into DB
        // try {
        //     DB::table('products')->insert($products);
        //     echo "🎉 Products seeded successfully!\n";
        // } catch (\Exception $e) {
        //     echo "❌ Database error: " . $e->getMessage() . "\n";
        // }
    }
}
