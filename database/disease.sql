-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2020 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disease`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`) VALUES
(6, 'Admin', 'a0a475cf454cf9a06979034098167b9e');

-- --------------------------------------------------------

--
-- Table structure for table `disease_tb`
--

CREATE TABLE `disease_tb` (
  `id` int(11) NOT NULL,
  `disease_id` int(50) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `cause` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_tb`
--

INSERT INTO `disease_tb` (`id`, `disease_id`, `disease_name`, `cause`) VALUES
(1, 1, 'Cataracts', 'Build Up Protein in an Eye .Present From Birth .Eye injuries .If not treated properly cause Blindness.'),
(2, 2, 'trachoma', 'Water shortage , poor sanitation and infestation of files . Repeated infections with bacteria known as chamydia travhoma .'),
(3, 3, 'Keratotoconjunctives sicca ', 'Dry eyes ,causes Eye infections .'),
(4, 4, 'Macular Degeneration', 'Smoking ,Obesity ,Cardiovascular Disease ,Family history and genetics .'),
(5, 5, 'Astigmatism ', 'Blurred distance and near vision.Astigmatism is often present at birth and may occur  in combination with nearsightedness and farsightedness.'),
(6, 6, 'Uvetils', 'Symptoms may occur suddenly and may get worse quickly . Though in some cases they grow gradually .They may affect one or both eyes .It can be serious permanent vision loss .'),
(7, 7, 'Glucoma ', 'Cause Blindness if not treated properly .'),
(8, 8, 'Diabetic reintopathy', 'Usually affects both eyes .Careful about your diabetics is the best way to prevent permanent vision loss .'),
(9, 9, 'Hordoleum', 'Most sites are harmless to your eye and won\'t affect your ability to see clearly .Try self care measures first .,such as applying wash cloth to your closed .'),
(10, 10, 'Conjunctives ', 'Serious eye conditions that cause eye redness .May cause eye pain,a feeling that something is stuck in your eye .If symptoms don\'t get better during 12-24 hours then make an appointment to your doctor .'),
(11, 0, 'Sorrry,Less Information.Select information Properly.', 'To Show your disease You have to select the symptoms that you face.After selecting the symptoms you can get your result .'),
(12, 12, 'Canker Sores.', 'Possible triggers for canker sores include: A minor injury to your mouth from dental work, overzealous brushing, sports mishaps or an accidental cheek bite. Toothpastes and mouth rinses containing sodium lauryl sulfate.'),
(13, 13, 'Cold Sores.', 'Cold sores — also called fever blisters — are a common viral infection. They are tiny, fluid-filled blisters on and around your lips. These blisters are often grouped together in patches. After the blisters break, a crust forms over the resulting sore.'),
(14, 14, 'Dental Health.', 'Risk factors for oral and dental ill health include poor diet and hygiene, trauma, stress, smoking, alcohol use, and use of illegal substances. These are also common risk factors for other chronic diseases.'),
(15, 15, 'Dry Mouth.', 'Dry mouth, or xerostomia (zeer-o-STOE-me-uh), refers to a condition in which the salivary glands in your mouth don\'t make enough saliva to keep your mouth wet. Dry mouth is often due to the side effect of certain medications or aging issues.'),
(16, 16, 'Gum Disease.', 'The disease is still reversible at this stage, and can usually be eliminated by careful daily brushing and flossing. In the more advanced stages of gum disease, called periodontitis, the gums and bone that support the teeth become seriously damaged.'),
(17, 17, 'Oral Cancer.', 'In the early stages, mouth cancer rarely causes any pain. Abnormal cell growth usually appears as flat patches. A canker sore looks like an ulcer, usually with a depression in the center.'),
(18, 18, 'Salivary Gland Disorders.', 'Dry mouth is caused when the salivary glands in the mouth don\'t make enough saliva to keep your mouth wet. These glands may not work properly as the result of: Medications. '),
(19, 19, 'Autoimmune Diseases', 'Multiple sclerosis, or MS, is a disease of the central nervous system in which the body’s immune system attacks myelin, the tissue that covers nerves. This interferes with neural communication between the brain and the body.'),
(20, 20, 'Autism and Neural Development Diseases', 'Autism spectrum disorder is a developmental condition that affects an individual’s ability to communicate and interact with others. The disorder can be diagnosed at any age, but symptoms typically appear within the first two years of life.'),
(21, 21, 'Dementia', 'Symptoms of dementia include a progressive loss of cognitive and functional ability, leading to a loss of independence. There are currently no effective treatments, but many trials are underway that may offer hope to patients and their families.'),
(22, 22, 'Brain Infections', 'Common brain diseases caused by an infection include meningitis and encephalitis. Meningitis is an infection in the lining around the brain or spinal cord. Encephalitis is an infection of the brain tissue.'),
(23, 23, 'Movement Disorders', 'Parkinson’s disease, ataxias, tremor, dystonia, tics and Tourette syndrome are examples of movement disorders that often progress to a complete loss of function. They can lead to tremors, slow and stiff movement, loss of balance.'),
(24, 24, 'Neuromuscular Diseases', 'These disorders attack peripheral nerves outside the brain and the muscles they control. Amyotrophic lateral sclerosis, commonly referred to as ALS or Lou Gehrig’s disease, is the best known of these diseases.'),
(25, 25, 'Seizure Disorders', 'Epilepsy and other seizure disorders affect about 3.4 million people, according to the Centers for Disease Control and Prevention. Seizures are caused by a disruption in brain activity, either because of illness, brain damage or other factors.'),
(26, 26, 'Stroke and Vascular Diseases', 'Stroke is the leading cause of permanent disability in adults. An ischemic stroke is when blood flow to the brain is impaired by a blocked blood vessel. A hemorrhagic stroke is when a blood vessel in the brain ruptures, causing bleeding into the brain.'),
(27, 27, 'Trauma', 'Trauma, including concussion, can be mild or severe, and can cause anything from a mild headache to confusion, loss of consciousness, convulsions and even death. Benish stresses the importance of head protection for everyone.'),
(28, 28, 'Tumors', 'Both benign and malignant tumors can put pressure on brain tissue or destroy tissue, causing problems in the body associated with the area of the brain affected. Tumors can start within the brain or metastasize there from other organs.'),
(29, 29, 'Scoliosis', 'Most often, the cause of scoliosis, or abnormal curvature of the spine, is unknown – called idiopathic scoliosis. In other cases, it may be degenerative and occur as a person ages.'),
(30, 30, 'Spina Bifida', 'This birth defect – specifically what’s called a neural tube defect – occurs on a continuum: It can be more or less severe. The most severe form is known as myelomeningocele.Depending upon severity, spina bifida can lead to a range of complications.'),
(31, 31, 'Bell’s Palsy', 'This condition causes temporary paralysis or weakness of one side of the face. “It’s a loss of function of the seventh cranial nerve,” Lawton explains. '),
(32, 32, 'Osteoarthritis', '  This type of arthritis occurs when the cartilage that cushions the ends of your bones deteriorates over time. Osteoarthritis in the wrist is uncommon and usually occurs only in people who have injured that wrist in the past.'),
(33, 33, 'Rheumatoid arthritis.', 'RA is a chronic disease marked by symptoms of inflammation and pain in the joints. These symptoms and signs occur during periods known as flares or exacerbations. Other times are known as periods of remission — this is when symptoms disappear completely.'),
(34, 34, 'Carpal tunnel syndrome', 'Carpal tunnel syndrome develops when there\'s increased pressure on the median nerve as it passes through the carpal tunnel, a passageway in the palm side of your wrist.'),
(35, 35, 'Ganglion cysts', 'These soft tissue cysts occur most often on the part of your wrist opposite       your palm. Ganglion cysts may be painful, and pain may either worsen or improve with activity.'),
(36, 36, 'Kienbock\'s disease.', 'This disorder typically affects young adults and involves the progressive collapse of one of the small bones in the wrist. Kienbock\'s disease occurs when the blood supply to this bone is compromised.'),
(37, 37, 'Allergic rhinitis ', 'An allergen is an otherwise harmless substance that causes an allergic reaction. Allergic rhinitis, or hay fever, is an allergic response to specific allergens. Pollen is the most common allergen in seasonal allergic rhinitis.'),
(38, 38, 'Chronic sinusitis with polyps', 'Nasal polyps can affect anyone, but they\'re more common in adults. Medications can often shrink or eliminate nasal polyps, but surgery is sometimes needed to remove them. Even after successful treatment, nasal polyps often return.'),
(39, 39, 'Fungal sinusitis ', 'Fungal infection of the sinuses can occur when fungal organisms are inhaled and deposited in the nasal passageways and paranasal sinuses, causing inflammation. The dark, moist environment of the sinuses is ideal for fungi.'),
(40, 40, 'Inverting papilloma ', 'Although it is believed that viral infection, chronic inflammation and cigarette smoking can play an important etiological role, it has recently been suggested that occupational risk factors, such as those involved in malignant epithelial .'),
(41, 41, 'Meningoencephalocele ', 'Meningoencephalocele is a type of encephalocele, which is an abnormal sac of fluid, brain tissue , and meninges (membranes that cover the brain and spinal cord) that extends through a defect in the skull.'),
(42, 42, 'Nasal fractures', 'A nasal fracture, commonly referred to as a broken nose, is a fracture of one of the bones of the nose. Symptoms may include bleeding, swelling, bruising, and an inability to breathe through the nose.'),
(43, 43, ' Nasal masses and nasal tumors', 'Nasal and paranasal tumors can be noncancerous (benign) or they can be cancerous (malignant). Several types of nasal and paranasal tumors exist. Which type of tumor you have helps determine the best treatment for you.'),
(44, 44, 'Triad asthma.', 'Samter\'s Triad is a chronic condition defined by asthma, sinus inflammation with recurring nasal polyps, and aspirin sensitivity. It\'s also called aspirin-exacerbated respiratory disease (AERD), or ASA triad.'),
(45, 45, 'Asthma.', 'There are two main types of medications used to treat asthma: Long-term control medications such as inhaled corticosteroids are the most important medications used to keep asthma under control. These preventive medications treat the airway inflammation.'),
(46, 46, 'Chronic Obstructive Pulmonary Disease (COPD).', 'COPD symptoms often don\'t appear until significant lung damage has occurred, and they usually worsen over time, particularly if smoking exposure continues.'),
(47, 47, 'Chronic Bronchitis.', 'Chronic bronchitis fills your airways with thick mucus. The small hairs that normally move phlegm out of your lungs are damaged. That makes you cough. As the disease goes on, it’s harder for you to breathe.'),
(48, 48, 'Emphysema.', 'Emphysema and chronic bronchitis are two conditions that make up chronic obstructive pulmonary disease (COPD). Smoking is the leading cause of COPD. Treatment may slow the progression of COPD, but it can\'t reverse the damage.'),
(49, 49, 'Lung Cancer.', 'Lung cancer may not produce any noticeable symptoms in the early stages, and many people aren’t diagnosed until the disease has advanced. Read on to learn about nine early lung cancer symptoms, and how early screening may help people at high risk . '),
(50, 50, ' Cystic Fibrosis/Bronchiectasis', 'Bronchiectasis is an under-diagnosed condition. If it is suspected, your doctor will first require a detailed family history and blood tests to dete rmine whether you may have an underlying condition that could cause  Bronchiectasis.'),
(51, 51, 'Pneumonia', 'Pneumonia symptoms can vary from so mild you barely notice them, to so severe that hospitalization is required. How your body responds to pneumonia depends on the type germ causing the infection, your age and your overall health.'),
(52, 52, 'Pleural Effusion.', 'This usually happens if you have congestive heart failure, when  your heart doesn\'t pump blood to your body properly. But it can also come from liver or kidney disease, when fluid builds up in your body and leaks into the pleural space.'),
(53, 53, ' Cystic fibrosis', 'People with cystic fibrosis have a higher than normal level of salt in their sweat. Parents often can taste the salt when they kiss their children. Most of the other signs and symptoms of CF affect the respiratory system and digestive system.'),
(54, 54, 'Acute respiratory distress syndrome (ARDS)', 'Many people who develop ARDS don\'t survive. The risk of death increases with age and severity of illness. Of the people who do survive ARDS, some recover completely while others experience lasting damage to their lungs.'),
(55, 55, 'Pneumoconiosis', 'There is no specific test for black lung disease. If you are concerned about your symptoms, your doctor will first want to take a detailed medical history, asking about your job history in detail to determine the likelihood of exposure.'),
(56, 56, 'Gastroesophageal Reflux Disease (GERD)', 'When stomach acid backs up into your esophagus — a condition called acid reflux — you may feel a burning pain in the middle of your chest. It often occurs after meals or at night,'),
(57, 57, 'Gallstones', 'Gallstones are hard deposits that form in your gallbladder — a small, pear-shaped sack that stores and secretes bile for digestion.Medications sometimes dissolve gallstones, but if that doesn’t work, the next step is surgery to remove the gallbladder. '),
(58, 58, 'Celiac Disease', 'Symptoms of celiac disease in children include abdominal pain and bloating, diarrhea, constipation, vomiting, and weight loss. Symptoms in adults can also include anemia, fatigue, bone loss, depression, and seizures.'),
(59, 59, 'Crohn\'s Disease', 'Crohn’s disease is part of a group of digestive conditions called inflammatory bowel disease (IBD). Doctors aren\'t sure what causes the disease, but it\'s thought that genetics and family history may play a part. '),
(60, 60, 'Ulcerative Colitis.', 'The symptoms of ulcerative colitis are very similar to those of Crohn\'s, but the part of the digestive tract affected is solely the large intestine, also known as the colon.'),
(61, 61, 'Irritable Bowel Syndrome.', 'Signs of IBS can vary widely: You can be constipated or have diarrhea, or have hard, dry stools on one day and loose watery stools on another. Bloating is also a symptom of IBS.'),
(62, 62, 'Hemorrhoids', 'Hemorrhoids are an inflammation of the blood vessels at the end of your digestive tract. They can be painful and itchy. Causes include chronic constipation, diarrhea, straining during bowel movements, and a lack of fiber in your diet.'),
(63, 63, 'Diverticulitis.', 'Small pouches called diverticula can form anywhere there are weak spots in the lining of your digestive system, but they are most commonly found in the colon.'),
(64, 64, ' Anal Fissure', 'A high-fiber diet that makes your stool well formed and bulky is often the best treatment for this common digestive condition.'),
(65, 65, 'Bursitis/Rotator Cuff Tendonitis', 'This occurs when there is inflammation of the rotator cuff tendons and the bursa that surrounds these tendons. Often there is an initial injury that sets off the process of inflammation which means the problem can be self-exacerbating.'),
(66, 66, 'Shoulder Arthritis', 'Treatment of shoulder arthritis should begin with the most basic steps, and progress to the more involved, possibly including surgery.  Not all treatments are appropriate in every patient, and you should have a discussion with your doctor to determine.'),
(67, 67, 'Otitis Externa.', 'Otitis externa is a condition that causes inflammation (redness and swelling) of the external ear canal, which is the tube between the outer ear and eardrum.With treatment, these symptoms should clear up within a few days. However, some cases can persist '),
(68, 68, 'Exostosis', 'Exostosis can cause chronic pain or irritation, depending on its size and location. Sometimes, cartilage will grow over an area of exostosis, which is called osteochondroma.'),
(69, 69, 'Otitis Media', 'Acute otitis media (AOM) is a painful type of ear infection. It occurs when the area behind the eardrum called the middle ear becomes inflamed and infected.'),
(70, 70, 'Tympanosclerosis.', 'Tympanosclerosis is a condition caused by hyalinization and subsequent calcification of subepithelial connective tissue of TM and middle ear, sometimes resulting in a detrimental effect to hearing.'),
(71, 71, 'Cholesteatoma.', 'The lump typically starts deep in your ear near your eardrum and grows toward your middle and inner ear. Cholesteatomas aren\'t cancerous. But if you don\'t treat them, they can cause problems, including hearing loss.'),
(72, 72, 'Otosclerosis', 'Otosclerosis is a serious bone deformation is a common cause of hearing loss for people in their twenties and thirties. The human ear contains three little bones that serve as sound transmitters from the outer to inner ear. '),
(73, 73, 'Meniere\'s disease', 'The cause of Meniere’s disease isn’t known, but scientists believe it’s caused by changes in the fluid in tubes of the inner ear. Other suggested causes include autoimmune disease, allergies, and genetics.'),
(74, 74, 'Acoustic neuroma.', 'Acoustic neuroma, also known as vestibular schwannoma, is a noncancerous and usually slow-growing tumor that develops on the main (vestibular) nerve leading from your inner ear to your brain.'),
(75, 75, 'Bursitis', 'Bursitis can be caused by chronic overuse, trauma, rheumatoid arthritis, gout or infection. Sometimes the cause cannot be determined. Chronic inflammation can occur with repeated injuries or attacks of bursitis.'),
(76, 76, 'Arthritis', 'You may have joint inflammation for a variety of reasons, including:An autoimmune disease (the body attacks itself because the immune system believes a body part is foreign) , Broken bone , General \"wear and tear\" on joints, Infection.'),
(77, 77, 'Tendinitis', ' Tendinitis usually happens after repeated injury to an area such as the wrist or ankle. It causes pain and soreness around a joint. Some common forms of tendinitis are named after the sports that increase their risk. They include tennis elbow, golfer\'s e'),
(78, 78, 'Bursitis', ' Bursitis occurs when a bursa becomes inflamed. People get bursitis by overusing a joint. It can also be caused by an injury. It usually occurs at the knee or elbow.'),
(79, 79, 'Sprains ', 'A sprain occurs when you overextend or tear a ligament while severely stressing a joint.'),
(80, 80, 'Dislocation.', 'An elbow dislocation occurs when the bones of the forearm (the radius and ulna) move out of place compared with the bone of the arm (the humerus)'),
(81, 81, 'Fracture', 'Most often a displaced fracture in the radius and a dislocation of the ulna at the wrist, where the radius and ulna come together.'),
(82, 82, 'Arthritis.', 'Arthritis can occur in the wrist or elbow, causing a dull ache in the forearm. An underlying condition: Certain medical conditions, such as angina, can cause pain in the forearm.'),
(83, 83, 'Bunions', 'Wearing tight or narrow shoes can cause bunions to develop. Tight shoes put pressure on the metatarsophalangeal joint (MTP), which is where the bone of the foot meets the bone of the big toe.'),
(84, 84, 'Diabetic neuropathy', 'Over time, high blood sugar levels can damage the nerves, especially those in the feet. Other factors can make this nerve damage worse, such as a history of smoking, alcoholism, or history of diabetic neuropathy in the family.'),
(85, 85, 'Ingrown toenails', 'Wearing badly-fitting shoes usually causes ingrown toenails. The pressure from shoes that are too narrow at the top or too tight can put extra pressure on the toes.'),
(86, 86, 'Plantar fasciitis', 'Plantar fasciitis is an inflammatory condition that usually does not have a clear cause. Doctors refer to this condition, as idiopathic plantar fasciitis.'),
(87, 87, 'Fungal Infections', 'While the most common foot fungal infection you hear about is athlete’s foot, it’s not the only one you have to worry about. The symptoms of fungal infections are pretty similar across the board though.'),
(88, 88, 'Gout', 'Gout doesn’t only happen in the foot, but the most common place people experience it is in their big toe. It’s a form of arthritis that causes serious pain and swelling in a joint.'),
(89, 89, 'Musculoskeletal disorder', 'Musculoskeletal pain is pain that affects the muscles, ligaments and tendons, and bones.The causes of musculoskeletal pain are varied. Muscle tissue can be damaged with the wear and tear of daily activities.'),
(90, 90, 'Pinched Spinal Nerve', 'Thigh pain may be caused by a pinched spinal nerve. Herniated lumbar discs or low back arthritis may pinch on the nerves that exit your spinal column and travel down your thigh.'),
(91, 91, 'Spinal Stenosis', 'Spinal stenosis is a condition where your spinal nerves are compressed by the bony anatomy of your spine.'),
(92, 92, 'Quadriceps or Hamstring Tendonitis.', 'Overuse and repetitive stress to your thigh muscles may cause inflammation in your tendons, a condition that is known as tendonitis.'),
(93, 93, 'Iliotibial Band Friction Syndrome.', 'Your iliotibial band is a thick piece of fascia and tissue that courses down the outer side of your thigh. Sometimes it can become irritated with overuse or repeated stress. '),
(94, 94, 'Ligament sprains ', 'A thigh strain refers to an injury where the fibres in a quadriceps muscles are overstretched. Once the fibers are overstretched to a certain point, muscle tears occur. These can vary from a minor strain to a full thickness muscle tear.'),
(95, 95, 'Herniated disc', 'A herniated disk refers to a problem with one of the rubbery cushions (disks) that sit between the individual bones (vertebrae) that stack to make your spine.'),
(96, 96, 'Bursitis', 'This painful inflammation of the bursa and surrounding tissue commonly targets the hip and its many bursae. Typically, the bursae cushioning the greater trochanter, or outward portion of your upper thigh bone, are affected.'),
(97, 97, 'Iliotibial band syndrome', 'The iliotibial (IT) band is a strong, thick band of fibrous tissue that starts at the hip and runs along the outer thigh, attaching on the outside edge of the shin bone (tibia) just below the knee joint.'),
(98, 98, 'Muscle spasm or tension', 'A muscle cramp is a sudden and involuntary contraction of one or more of your muscles. If you\'ve ever been awakened in the night or stopped in your tracks by a sudden charley horse, you know that muscle cramps can cause severe pain.'),
(99, 99, 'Sprains and Strains', 'Falling, twisting, or getting hit can all cause a sprain.'),
(100, 100, 'Dislocations', 'The cause is often a fall or a blow, sometimes from playing a contact sport. You can dislocate your ankles, knees, shoulders, hips, elbows and jaw. You can also dislocate your finger and toe joints.'),
(101, 101, 'Fractures', 'If the broken bone punctures the skin, it is called an open or compound fracture. Fractures commonly happen because of car accidents, falls, or sports injuries.'),
(102, 102, 'Peripheral Nerve Disorders', 'Some people are born with peripheral nerve disorders.others are from nerve compression, like carpal tunnel syndrome or thoracic outlet syndrome. In some cases, like complex regional pain syndrome and brachial plexus injuries.'),
(103, 103, 'sprains (injury to ligaments)', 'A sprain is a stretching or tearing of ligaments — the tough bands of fibrous tissue that connect two bones together in your joints. The most common location for a sprain is in your ankle.'),
(104, 104, 'fractures', 'A fracture is a crack or break in a bone. Most fractures result from force applied to a bone. '),
(105, 105, 'tendonitis (inflammation of the tendons)', 'Tendinitis is inflammation or irritation of a tendon — the thick fibrous cords that attach muscle to bone. The condition causes pain and tenderness just outside a joint.'),
(106, 106, 'arthritis (chronic inflammation of joints)', ' the immune system doesn’t work properly and releases inflammatory chemicals. The resulting inflammation attacks joint tissues and can cause joint swelling, increased joint fluid, cartilage and bone damage, and muscle loss. '),
(107, 107, 'Carpal Tunnel Syndrome', 'Carpal tunnel syndrome may be caused by a combination of different factors that can increase pressure on the median nerve and narrow the carpal tunnel'),
(108, 108, 'Arthritis', 'Osteoarthritis is often called “wear-and-tear arthritis” and is caused by the cartilage in joints wearing away over time.'),
(109, 109, 'Trigger Finger', 'Trigger finger may develop after forceful hand use.'),
(110, 110, 'Tendinitis and Tenosynovitis', 'Tendinitis is inflammation of a tendon. Tenosynovitis is tendinitis accompanied by inflammation of the protective covering around the tendon (tendon sheath).'),
(111, 111, 'Neisseria gonorrhoeae.', 'Gonorrhea is a sexually transmitted disease (STD) caused by infection with the Neisseria gonorrhoeae bacterium. N. gonorrhoeae infects the mucous membranes of the reproductive tract, including the cervix, uterus, and fallopian tubes in women.'),
(112, 112, ' Chlamydia trachomatis.', 'The parasite Chlamydia trachomatis causes a variety of disorders—in women, urethritis, cervicitis, and salpingitis (inflammation of the ureter, cervix, and fallopian tubes, respectively) and, in men, nongonococcal urethritis.'),
(113, 113, 'Mycoplasma genitalium', 'Mycoplasma genitalium (MG) is a type of bacteria that can cause an STD. You get it by having sex with someone who has it. Even if you don’t go “all the way” with vaginal sex, you can get MG through sexual touching or rubbing.'),
(114, 114, 'Ureaplasma urealyticum', 'Most healthy women have these bacteria in their cervix or vagina, and a smaller number of men also have them in their urethra.'),
(115, 115, 'Staphylococcus aureus', 'Staph infections are caused by staphylococcus bacteria, types of germs commonly found on the skin or in the nose of even healthy individuals. Most of the time, these bacteria cause no problems or result in relatively minor skin infections.'),
(116, 116, 'Chlamydia trachomatis', 'Chlamydia trachomatis is a common sexually transmitted infection (STI) caused by bacteria. You might not know you have chlamydia because many people don\'t have signs or symptoms, such as genital pain and discharge from the vagina or penis.'),
(117, 117, 'Osteitis Pubis', 'Osteitis pubis is a condition in which there’s inflammation where the right and left pubic bones meet at the lower front part of the pelvis.'),
(118, 118, 'Vulvar cancer', 'Vulvar cancer is a type of cancer that occurs on the outer surface area of the female genitalia. The vulva is the area of skin that surrounds the urethra and vagina, including the clitoris and labia.'),
(119, 119, 'Rectus adductor syndrome', 'The rectus-adductor syndrome is a form of groin pain caused by microtraumas which consists of a chronic inflammation in the insertion point onto the pubis, that is, of the tendons of the adductors and rectus abdominis (see fig. beside). '),
(120, 120, 'Hernia', ' hernia occurs when an organ pushes through an opening in the muscle or tissue that holds it in place. For example, the intestines may break through a weakened area in the abdominal wall.'),
(121, 121, 'Symphysis pubis dysfunction ', 'Symphysis pubis dysfunction (SPD) is a group of symptoms that cause discomfort in the pelvic region. It usually occurs during pregnancy, It can occur both at the front and back of your pelvis. '),
(122, 122, 'ACL injury:', 'An ACL injury is a tear of the anterior cruciate ligament (ACL) — one of four ligaments that connect your shinbone to your thighbone.'),
(123, 123, 'Fractures', 'The bones of the knee, including the kneecap (patella), can be broken during motor vehicle collisions or falls. '),
(124, 124, 'Torn meniscus', 'Any activity that causes you to forcefully twist or rotate your knee, especially when putting your full weight on it, can lead to a torn meniscus.'),
(125, 125, 'Knee bursitis', ' Some knee injuries cause inflammation in the bursae, the small sacs of fluid that cushion the outside of your knee joint so that tendons and ligaments glide smoothly over the joint.'),
(126, 126, 'Patellar tendinitis', 'Patellar tendonitis is a common injury or inflammation of the tendon that connects your kneecap (patella) to your shinbone (tibia). Your pain may be mild or severe.'),
(127, 127, 'Iliotibial band syndrome', 'Iliotibial (IT) band syndrome is often caused by repetitively bending the knee during physical activities, such as running, cycling, swimming, and climbing.'),
(128, 128, 'Dislocated kneecap', 'Kneecap dislocation occurs when the triangle-shaped bone covering the knee (patella) moves or slides out of place. The dislocation often occurs toward the outside of the leg.'),
(129, 129, 'Osteoarthritis', 'Osteoarthritis (OA) of the knee affects the bones, the cartilage, and the synovium in the knee joint.'),
(130, 130, 'Gout', 'Gout is a painful form of inflammatory arthritis that usually affects the big toe, but can develop in any joint, including one or both of the knees.'),
(131, 131, 'Pseudogout', 'Pseudogout (SOO-doe-gout) is a form of arthritis characterized by sudden, painful swelling in one or more of your joints. These episodes can last for days or weeks. The most commonly affected joint is the knee.'),
(132, 132, 'Septic arthritis', 'Sometimes your knee joint can become infected, leading to swelling, pain and redness. Septic arthritis often occurs with a fever, and there\'s usually no trauma before the onset of pain. '),
(133, 133, 'Whiplash', 'Whiplash typically occurs when your head is forcefully and quickly thrown backward and then forward.'),
(134, 134, 'Repetitive strain', 'RSI is related to the overuse of muscles and tendons in the upper body.'),
(135, 135, 'Sprains and strains', 'Sprains and strains occur when the body is put under physical stress.'),
(136, 136, 'Nerve pinch injury', 'A pinched nerve occurs when too much pressure is applied to a nerve by surrounding tissues, such as bones, cartilage, muscles or tendons.'),
(137, 137, 'Vertebral fracture', 'When bones are brittle, your vertebrae aren’t strong enough to support your spine in everyday activities. When you bend to lift an object, miss a step, or slip on a carpet, you can put your spinal bones at risk of fracture.'),
(138, 138, 'Spinal cord damage', 'Spinal cord injuries may result from damage to the vertebrae, ligaments or disks of the spinal column or to the spinal cord itself.');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms_tb`
--

CREATE TABLE `symptoms_tb` (
  `id` int(11) NOT NULL,
  `symptoms_id` int(50) NOT NULL,
  `symptoms_name` varchar(100) NOT NULL,
  `disease_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms_tb`
--

INSERT INTO `symptoms_tb` (`id`, `symptoms_id`, `symptoms_name`, `disease_id`) VALUES
(1, 1, 'Double vision in  a single eye ', 1),
(2, 2, 'Irritated eyes ', 2),
(3, 3, 'Fatigue eyes ', 3),
(4, 4, 'Decreases color sensivity', 4),
(5, 5, 'Difficulty with night vision', 5),
(6, 6, 'Dark , Floating Spots in your vision', 6),
(7, 7, 'Nausea and Vomitting ', 7),
(8, 8, 'More frequent blinking ', 8),
(9, 9, 'Eyelid pain', 9),
(10, 10, 'Gritty , Burning and stinging in the eyes ', 10),
(11, 11, 'Blurred vision ', 1),
(12, 11, 'Blurred Vision', 3),
(13, 11, 'Blurred Vision', 4),
(14, 11, 'Blurred Vision', 5),
(15, 11, 'Blurred Vision', 6),
(16, 11, 'Blurred Vision', 7),
(17, 11, 'Blurred Vision', 8),
(18, 12, 'Need For Brighter Lighting ', 1),
(19, 12, 'Need For Brighter Lighting ', 4),
(20, 13, 'Loss of contrast sensitivity', 1),
(21, 13, 'Loss of contrast sensitivity', 4),
(22, 14, 'Redness on eye', 2),
(23, 14, 'Redness on eye', 6),
(24, 14, 'Redness on eye', 7),
(25, 14, 'Redness on eye', 10),
(26, 15, 'Discharge from the eyes ', 2),
(28, 16, 'Burning sensation', 3),
(29, 17, 'Itchy Eyes', 10),
(30, 18, 'Itchy Eyes', 3),
(31, 19, 'Heavy Eyes ', 3),
(32, 8, 'More frequent blinking ', 3),
(33, 20, 'Fatigue eyes ', 3),
(34, 21, 'Visual Distortions ', 4),
(35, 22, 'Headaches ', 7),
(36, 23, 'Changes vision in one eyes ', 4),
(37, 24, 'Eyestrain', 5),
(38, 25, 'Eye Pain', 6),
(39, 26, 'Tearing ', 9),
(40, 27, 'Extreme difficulty eating or drinking', 12),
(41, 28, 'Pain that you can\'t control with self-care measures', 12),
(42, 29, 'High fever along with canker sores.', 12),
(43, 30, 'Are oval shaped with a red edge', 12),
(44, 31, 'Tingling and itching.', 13),
(45, 32, 'Oozing and crusting.', 13),
(46, 33, 'Fever', 13),
(47, 34, 'Headache', 13),
(48, 35, 'Chronic bad breath', 14),
(49, 36, 'loose teeth', 14),
(50, 37, 'bleeding or swollen gums after brushing or flossing', 14),
(51, 38, 'Dryness or a feeling of stickiness in your mouth', 15),
(52, 35, 'chronic bad breath', 15),
(53, 39, 'Difficulty chewing, speaking and swallowing', 15),
(54, 40, 'A changed sense of taste', 15),
(55, 35, 'chronic bad breath', 16),
(56, 36, 'Sensitive teeth.', 16),
(57, 37, 'Wiggly or shifting teeth.', 16),
(58, 39, 'Difficulty chewing, speaking and swallowing', 17),
(59, 41, 'A white or reddish patch on the inside of your mouth', 17),
(60, 42, 'Ear pain', 17),
(61, 43, 'a constant abnormal or foul taste in your mouth.', 18),
(62, 44, 'discomfort or pain when opening your mouth or eating.', 18),
(63, 45, 'redness or swelling over your jaw in front of your ears, below your jaw, or on the your mouth.', 18),
(64, 46, 'Trouble concentrating', 19),
(65, 46, 'Trouble concentrating', 20),
(66, 47, 'Memory loss, which is usually noticed by a spouse or someone else.', 21),
(67, 48, 'severe headache', 22),
(68, 49, ' uncoordinated or clumsy balance, speech or limb movements', 23),
(69, 50, 'Numbness, tingling or painful sensations', 24),
(70, 51, 'fatigue', 19),
(71, 52, 'Hair loss', 19),
(72, 53, 'swelling and redness', 19),
(73, 54, 'skin rashes', 19),
(74, 55, 'Avoids eye contact.', 20),
(75, 56, 'Not recognizing sarcasm or joking.', 20),
(76, 57, 'Constant moving (pacing) and “hyper” behavior.', 20),
(77, 58, 'Difficulty communicating or finding words', 21),
(78, 59, 'Difficulty with planning and organizing', 21),
(79, 60, 'Confusion and disorientation', 21),
(80, 61, 'Depression', 21),
(81, 57, 'Constant moving (pacing) and “hyper” behavior.', 21),
(82, 61, 'high fever', 20),
(83, 62, 'Nausea and Vomiting', 20),
(84, 60, 'Confusion and disorientation', 20),
(85, 63, 'low blood pressure and impaired bladder function.', 23),
(86, 64, 'abnormal feelings in the legs while relaxing or lying down, often relieved by movement.', 23),
(87, 65, 'Trouble breathing', 24),
(88, 1, 'Double vision in a single eye', 24),
(89, 66, 'Balance problems', 24),
(90, 67, 'Movement issues', 24),
(91, 68, 'Sudden numbness or weakness of the face, arm or leg (especially on one side of the body)', 25),
(92, 60, 'Confusion and disorientation', 25),
(93, 66, 'Balance problems', 25),
(94, 48, 'severe headache', 25),
(95, 48, 'severe headache', 28),
(96, 60, 'Confusion and disorientation', 26),
(97, 69, 'Uncontrollable jerking movements of the arms and leg', 26),
(98, 70, 'Cognitive or emotional symptoms, such as fear, anxiety or deja vu', 26),
(99, 71, 'distressing, unwanted memories, vivid nightmares and/or flashbacks', 27),
(100, 72, 'Negative thoughts and feelings such as fear, anger, guilt, or feeling flat or numb a lot of the time', 27),
(101, 73, 'trouble sleeping or concentrating, feeling angry or irritable, taking risks', 27),
(102, 62, '	Nausea and Vomitting', 28),
(103, 11, 'Blurred vision', 28),
(104, 74, 'Gradual loss of sensation or movement in an arm or a leg', 28),
(105, 66, 'Balance problems', 28),
(106, 60, 'Confusion and disorientation', 28),
(107, 75, 'Personality or behavior changes', 28),
(108, 76, 'Hearing problems', 28),
(109, 77, 'One shoulder blade that appears more prominent than the other', 29),
(110, 78, 'Uneven shoulders', 29),
(111, 79, 'One hip higher than the other', 29),
(112, 80, 'Weak leg muscles (in some cases, the infant can\'t move them at all)', 30),
(113, 81, 'Bowel or bladder problems.', 30),
(114, 82, 'Seizures.', 30),
(115, 83, 'Pain around the jaw or in or behind your ear on the affected side', 31),
(116, 84, 'Increased sensitivity to sound on the affected side', 31),
(117, 48, 'severe headache', 31),
(118, 40, '	A changed sense of taste', 31),
(119, 84, 'Changes in the amount of tears and saliva you produce', 31),
(120, 85, 'Pain.', 32),
(121, 86, 'Stiffness. ', 32),
(122, 87, 'Tenderness. ', 32),
(123, 88, 'Loss of flexibility. ', 32),
(124, 53, 'swelling and redness', 32),
(125, 89, 'Bone spurs. ', 32),
(126, 90, '   joint pain', 33),
(127, 91, 'joint swelling', 33),
(128, 92, '   loss of joint function and deformities', 33),
(129, 93, 'Weakness.', 34),
(130, 85, 'Pain', 34),
(131, 53, 'Swelling', 34),
(132, 94, 'Tingling', 34),
(133, 95, 'changes wrist size', 35),
(134, 53, 'Swelling', 35),
(135, 85, 'Pain', 35),
(136, 93, 'Weakness', 35),
(137, 53, 'Swelling', 36),
(138, 87, 'Tenderness.', 36),
(139, 96, 'Pain or difficulty in turning the hand upward', 36),
(140, 86, '	Stiffness.', 36),
(141, 87, 'Sneezing', 37),
(142, 88, 'Runny Nose', 37),
(143, 89, 'stuffy nose', 37),
(144, 90, 'coughing', 37),
(145, 17, 'Itchy Eyes', 37),
(146, 91, 'watery eyes', 37),
(147, 92, 'frequent headaches', 37),
(148, 51, 'Excessive fatigue', 37),
(149, 93, 'Runny nose', 38),
(150, 94, 'Persistent stuffiness', 38),
(151, 95, 'Postnasal drip', 38),
(152, 96, 'Decreased or absent sense of smell', 38),
(153, 97, 'Loss of sense of taste', 38),
(154, 34, 'Headache', 38),
(155, 98, 'A sense of pressure over your forehead and face', 38),
(156, 99, 'Frequent nosebleeds', 38),
(157, 33, 'Fever.', 39),
(158, 100, 'Facial pain or numbness.', 39),
(159, 101, 'Nasal discharge.', 39),
(160, 90, 'Coughing', 39),
(161, 22, 'Headache.', 39),
(162, 102, 'Dark ulcers within the nasal canal or on the roof of the mouth.', 39),
(163, 103, 'Mental status changes.', 39),
(164, 104, 'Blocked nasal passages, usually just on one side', 40),
(165, 88, 'Runny Nose', 40),
(166, 104, 'Sinus infections', 40),
(167, 105, 'Nosebleeds', 40),
(168, 106, 'Neurologic problems.', 41),
(169, 107, 'Paralysis of the limbs', 41),
(170, 108, 'An abnormally small head', 41),
(171, 109, 'Uncoordinated muscle movement', 41),
(172, 110, 'Vision problems', 41),
(173, 111, 'Mental and growth retardation', 41),
(174, 112, 'Difficulty breathing through your nose', 43),
(175, 113, 'Difficulty opening your mouth', 43),
(176, 114, 'wheezing', 44),
(177, 115, 'tightness in the chest', 44),
(178, 116, 'sinus pain', 44),
(179, 117, 'rash', 44),
(180, 118, 'diarrhea or vomiting', 44),
(181, 119, 'flushing of the skin', 44),
(182, 120, 'abdominal pain', 44),
(183, 53, 'Swelling', 42),
(184, 85, 'Pain', 42),
(185, 87, 'Tenderness', 42),
(187, 37, 'bleeding of the nose and nasal region of the face', 42),
(188, 105, 'Nosebleeds', 43),
(189, 53, 'Facial Swelling ', 43),
(190, 110, 'Vision Problems ', 43),
(191, 91, 'Watery eyes', 43),
(192, 90, 'coughing', 44),
(193, 22, 'Headache', 44),
(194, 87, 'sneezing', 44),
(195, 121, 'Coughing, especially at night', 45),
(196, 114, 'Wheezing', 45),
(197, 122, 'Shortness of breath', 45),
(198, 123, 'Chest tightness, pain, or pressure', 45),
(199, 124, 'Feeling tired, easily upset, grouchy, or moody', 45),
(200, 125, 'Decreases or changes in lung function as measured on a peak flow meter', 45),
(201, 73, 'trouble sleeping or concentrating, feeling angry or irritable, taking risks', 45),
(202, 126, 'Shortness of breath', 46),
(204, 114, 'Wheezing', 46),
(205, 115, 'Chest tightness', 46),
(206, 127, 'Blueness of the lips or fingernail beds (cyanosis)', 46),
(207, 128, 'Swelling in ankles, feet or legs', 46),
(208, 129, 'Unintended weight loss (in later stages)', 46),
(209, 90, 'coughing', 47),
(210, 114, '	wheezing', 47),
(211, 115, 'tightness in the chest', 47),
(212, 126, 'Shortness of breath', 47),
(213, 124, 'Feeling tired, easily upset, grouchy, or moody', 47),
(214, 122, 'Shortness of breath', 48),
(215, 122, '	Shortness of breath', 50),
(216, 122, '	Shortness of breath', 51),
(217, 122, '	Shortness of breath', 52),
(218, 130, 'fingernails turn blue or gray with exertion', 48),
(219, 131, 'not mentally alert', 48),
(220, 132, 'Chemical fumes and dust', 48),
(221, 132, 'Breathing changes', 49),
(222, 123, 'Chest tightness, pain, or pressure', 49),
(223, 114, 'Wheezing', 49),
(224, 114, 'Wheezing', 50),
(225, 114, 'Wheezing', 53),
(226, 133, 'Raspy, hoarse voice', 49),
(227, 129, '	Unintended weight loss (in later stages)', 49),
(228, 134, 'Bone pain', 49),
(229, 22, 'Headache', 49),
(230, 51, 'fatigue', 50),
(231, 33, 'Fever', 50),
(232, 123, 'Chest tightness, pain, or pressure', 50),
(233, 135, 'Clubbing, or the thickening of the skin under nails', 50),
(234, 33, 'Fever', 51),
(235, 62, 'Nausea and Vomitting', 51),
(236, 60, 'Confusion, especially in older people', 51),
(237, 33, '	Fever', 52),
(238, 90, 'coughing', 52),
(239, 135, 'Repeated lung infections', 53),
(240, 90, 'Coughing', 53),
(241, 136, 'Foul-smelling, greasy stools', 53),
(242, 137, 'Poor weight gain and growth', 53),
(243, 138, 'Chronic or severe constipation', 53),
(244, 138, 'Low blood pressure', 54),
(245, 139, 'Confusion and extreme tiredness', 54),
(246, 140, 'Labored and unusually rapid breathing', 54),
(247, 141, 'Frequent heartburn, a burning feeling in your chest or throat', 56),
(248, 142, 'Regurgitating food or stomach contents.', 56),
(249, 143, 'Sore throat.', 56),
(250, 144, 'Feeling like there\'s a lump in your throat', 56),
(251, 145, 'Damaged teeth from stomach acid.', 56),
(252, 123, '	Chest tightness, pain, or pressure', 56),
(253, 35, 'chronic bad breath', 56),
(254, 33, 'Fever', 57),
(255, 62, 'Nausea and Vomiting', 57),
(256, 146, 'Jaundice (yellowing of the skin or eyes)', 57),
(257, 147, 'Clay colored stools or dark urine.', 57),
(258, 148, 'Gas', 58),
(259, 51, 'Fatigue', 58),
(260, 149, 'Iron-Deficiency Anemia', 58),
(261, 150, 'Constipation.', 58),
(262, 61, 'Depression', 58),
(263, 33, 'Fever', 59),
(264, 51, 'fatigue', 59),
(265, 120, '	abdominal pain', 59),
(266, 151, 'Blood in your stool.', 59),
(267, 152, 'Mouth sores.', 59),
(268, 129, 'Unintended weight loss (in later stages)', 59),
(269, 154, 'Pain or drainage near or around the anus due to inflammation from a tunnel into the skin (fistula)', 59),
(270, 120, 'abdominal pain', 60),
(271, 154, 'Rectal pain.', 60),
(272, 51, 'fatigue', 60),
(273, 129, 'Unintended weight loss (in later stages)', 60),
(274, 155, 'Inability to defecate despite urgency.', 60),
(275, 156, 'Pain and Cramping', 61),
(276, 157, 'Constipation', 61),
(277, 158, 'Gas and Bloating', 61),
(278, 159, 'Food Intolerance', 61),
(279, 160, 'Fatigue and Difficulty Sleeping', 61),
(280, 161, 'Itching or irritation in your anal region', 62),
(281, 162, 'Inflammation', 62),
(282, 85, 'Pain or discomfort', 62),
(283, 53, 'Swelling around your anus', 62),
(284, 163, 'Bleeding', 62),
(285, 85, 'Pain, which may be constant and persist for several days. ', 63),
(286, 62, 'Nausea and vomiting.', 63),
(287, 33, 'Fever.', 63),
(288, 164, 'Abdominal tenderness.', 63),
(289, 157, 'Constipation or, less commonly, diarrhea.', 63),
(290, 85, 'Pain, sometimes severe, during bowel movements', 64),
(291, 165, 'Bright red blood on the stool or toilet paper after a bowel movement', 64),
(292, 166, 'A visible crack in the skin around the anus', 64),
(293, 167, 'A small lump or skin tag on the skin near the anal fissure', 64),
(294, 85, 'Pain.', 65),
(295, 85, 'Pain.', 66),
(296, 85, 'Pain outside of the shoulder .', 65),
(297, 85, 'Pain while sleeping at night .', 65),
(298, 168, 'Limited range of motion', 66),
(299, 169, 'Stiffness of the shoulder', 66),
(300, 170, 'Tenderness around the joint', 66),
(301, 171, 'A feeling of grinding or catching within the joint', 66),
(302, 172, 'ear pain, which can be severe', 67),
(303, 173, 'itchiness in the ear canal', 67),
(304, 174, 'a discharge of liquid or pus from the ear', 67),
(305, 76, 'some degree of temporary hearing loss', 67),
(306, 176, 'bowed arms or legs', 68),
(307, 177, 'shorter height than average', 68),
(308, 178, 'irritability', 69),
(309, 179, 'sleeplessness', 69),
(310, 180, 'pulling on the ears', 69),
(311, 181, 'Tinnitus, or ringing, roaring, or hissing in your ears', 72),
(312, 182, 'Warmth over the joint', 75),
(313, 183, 'Severe pain', 80),
(314, 184, 'Intense pain', 81),
(315, 185, 'Swelling, bruising, or tenderness around the injury', 81),
(316, 186, 'Numbness and tingling', 81),
(317, 187, 'Problems moving a limb', 81),
(318, 188, 'Hurt more when you move it or press on it', 78),
(319, 189, 'muscle cramping', 79),
(320, 190, 'lose feeling in their hand or lose a pulse ', 80),
(321, 191, 'bruising may occur but may be delayed for several days', 79),
(322, 192, 'visible bump on the side of the foot', 83),
(323, 193, 'callus or corn on the bone below the big toe', 83),
(324, 194, 'difficulty moving the big toe', 83),
(325, 195, 'Redness', 85),
(326, 196, 'drainage from the toenail', 85),
(327, 197, 'pain on the bottom of the heel.', 86),
(328, 198, 'Dry skin – peeling and cracking', 87),
(329, 198, 'Blisters', 86),
(330, 199, 'Warmth in the same area', 88),
(331, 199, 'A lingering itch after the gout attack passes', 88),
(332, 200, 'Backache', 89),
(333, 201, 'Buttock or hip pain', 89),
(334, 202, 'Curvature of the spine', 89),
(335, 203, 'Greater sensitivity to a light touch than to firm pressure', 89),
(336, 204, 'Groin pain that spreads across the buttocks', 89),
(337, 205, 'One-sided pain', 89),
(338, 206, 'Difficulty sitting or rising from sitting', 90),
(339, 207, 'Difficulty walking or climbing stairs due to pain', 92),
(340, 208, 'Audible “pop” or snapping sensation ', 95),
(341, 290, 'Bladder or bowel dysfunction', 95),
(342, 291, 'Saddle anesthesia.', 95),
(343, 292, 'bumping outer thigh or hip', 96),
(344, 293, 'hard lump of muscle tissue', 98),
(345, 294, 'unable to move joint', 99),
(346, 295, 'joints are swollen', 100),
(347, 296, 'very painful', 100),
(348, 297, 'unable to move it', 100),
(349, 298, 'Limited ability to move the affected joint', 103),
(350, 299, 'Hearing or feeling a \"pop\" in your joint at the time of injury', 103),
(351, 300, 'Can\'t take heavy weight ', 104),
(352, 301, 'Warmth in the joins ', 106),
(353, 302, 'pain which worsens on movement', 105),
(354, 303, 'a feeling that the tendon is crackling or grating as it moves', 105),
(355, 304, 'a lump may develop along the tendon', 105),
(356, 305, 'Pain in the hand', 107),
(357, 306, 'Numbness in the hand', 107),
(358, 307, 'Pain in affected finger', 108),
(359, 308, 'fingers feels like it is locking or catching when try to bend it.', 109),
(360, 308, 'Painful when moved', 110),
(361, 309, 'A loud \"pop\" or a \"popping\" sensation in the knee', 122),
(362, 310, 'Pain when moving the knee in both directions', 123),
(363, 311, 'Difficulty straightening your knee fully', 124),
(364, 312, ' stiffness and pain with walking', 125),
(365, 313, 'weakness in the knee', 126),
(366, 314, 'pain when running or doing other activities', 127),
(367, 315, 'tenderness in buttocks', 127),
(368, 316, 'Loss of flexibility. ', 129),
(369, 317, 'Bleeding that isn\'t from menstruation', 118),
(370, 318, 'pain in the groin or lower abdominal region wall', 119),
(371, 319, 'pain in the front center of your pubic bone', 121),
(372, 320, 'pain in your perineum, the area between the anus and vagina', 121),
(373, 321, 'pain arises even during walking. ', 119),
(374, 322, 'inflammation right and left pubic bones ', 117),
(375, 323, 'Skin changes, such as color changes or thickening', 118),
(376, 324, 'A lump, wartlike bumps or an open sore (ulcer)', 118),
(377, 325, 'bulge or lump in the affected area', 120),
(378, 326, 'pain in your lower back on one or both sides', 121),
(379, 327, 'pain or burning sensation while urinating', 111),
(380, 328, 'the need to urinate more frequently', 111),
(381, 329, 'pain upon engaging in sexual intercourse', 111),
(382, 330, 'sharp pain in the lower abdomen', 111),
(383, 331, 'painful urination', 112),
(384, 332, 'Testicular pain in men', 116),
(385, 333, 'Pain, odor, or discharge ', 114),
(386, 334, 'Watery discharge', 113),
(387, 335, 'Neck pain and stiffness', 133),
(388, 336, 'Worsening of pain with neck movement', 133),
(389, 337, 'Loss of range of motion in the neck', 133),
(390, 338, 'Headaches, most often starting at the base of the skull', 133),
(391, 339, 'throbbing', 134),
(392, 340, 'Muscle weakness in the affected area', 136),
(393, 341, 'Frequent feeling that a foot or hand has \"fallen asleep\"', 137),
(394, 342, 'Sharp, aching or burning pain, which may radiate outward', 136),
(395, 343, 'Deformity and disability', 137),
(396, 344, 'Exaggerated reflex activities or spasms', 138),
(397, 345, 'Changes in sexual function, sexual sensitivity and fertility', 138);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact` varchar(100) NOT NULL,
  `reg_date` timestamp NULL DEFAULT current_timestamp(),
  `result` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `contact`, `reg_date`, `result`) VALUES
(15, 'user', 'a0a475cf454cf9a06979034098167b9e', 'mdnasim6416@gmail.com', '2020-04-04 14:00:21', 66),
(16, 'Nasim92', '5ec0b6355d9a5fdb2996c5b9950cc1c6', 'princeneo58@gmail.com', '2020-04-09 13:34:26', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `id` int(11) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `c_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_result`
--

INSERT INTO `user_result` (`id`, `experience`, `comments`, `name`, `email`, `c_date`) VALUES
(21, 'average', 'Great ', 'Cris Gayle', 'Cris@gmail.com', '2020-04-04 14:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `disease_tb`
--
ALTER TABLE `disease_tb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `disease_id` (`disease_id`);

--
-- Indexes for table `symptoms_tb`
--
ALTER TABLE `symptoms_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `user_result`
--
ALTER TABLE `user_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disease_tb`
--
ALTER TABLE `disease_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `symptoms_tb`
--
ALTER TABLE `symptoms_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_result`
--
ALTER TABLE `user_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
