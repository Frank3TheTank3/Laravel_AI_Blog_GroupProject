<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Max Musterman',
            'email' => 'musterman@gmail.com',
            'password' => Hash::make('muster'),
        ]);

        DB::table('articles')->insert([
            'id' => "1",
            'post_title' => "Immersive view coming soon to Maps — plus more updates",
            'post_date' => "01.07.2022",
            'post_author' =>"Miriam Daniel",
            'post_readtime' =>"3 min read",
            'hashtag' =>"#ai*#googlemaps*#immersive",
            'post_abstract' =>"Today at Google I/O, we announced new ways the latest advancements in AI are transforming Google Maps — helping you explore with an all-new immersive view of the world, find the most fuel-efficient route, and use the magic of Live View in your favorite third-party apps",
            'post_text' =>"Google Maps helps over one billion people navigate and explore. And over the past few years, our investments in AI have supercharged the ability to bring you the most helpful information about the real world, including when a business is open and how crowded your bus is. Today at Google I/O, we announced new ways the latest advancements in AI are transforming Google Maps — helping you explore with an all-new immersive view of the world, find the most fuel-efficient route, and use the magic of Live View in your favorite third-party apps.*A more immersive, intuitive map*Google Maps first launched to help people navigate to their destinations. Since then, it’s evolved to become much more — it’s a handy companion when you need to find the perfect restaurant or get information about a local business. Today — thanks to advances in computer vision and AI that allow us to fuse together billions of Street View and aerial images to create a rich, digital model of the world — we’re introducing a whole new way to explore with Maps. With our new immersive view, you’ll be able to experience what a neighborhood, landmark, restaurant or popular venue is like — and even feel like you’re right there before you ever set foot inside. So whether you’re traveling somewhere new or scoping out hidden local gems, immersive view will help you make the most informed decisions before you go.*Say you’re planning a trip to London and want to figure out the best sights to see and places to eat. With a quick search, you can virtually soar over Westminster to see the neighborhood and stunning architecture of places, like Big Ben, up close. With Google Maps’ helpful information layered on top, you can use the time slider to check out what the area looks like at different times of day and in various weather conditions, and see where the busy spots are. Looking for a spot for lunch? Glide down to street level to explore nearby restaurants and see helpful information, like live busyness and nearby traffic. You can even look inside them to quickly get a feel for the vibe of the place before you book your reservation.*The best part? Immersive view will work on just about any phone and device. It starts rolling out in Los Angeles, London, New York, San Francisco and Tokyo later this year with more cities coming soon.*An update on eco-friendly routing*In addition to making places easier to explore, we want to help you get there more sustainably. We recently launched eco-friendly routing in the U.S. and Canada, which lets you see and choose the most fuel-efficient route when looking for driving directions — helping you save money on gas. Since then, people have used it to travel 86 billion miles, saving more than an estimated half a million metric tons of carbon emissions — equivalent to taking 100,000 cars off the road. We’re on track to double this amount as we expand to more places, like Europe.*The magic of Live View — now in your favorite apps*Live View helps you find your way when walking around, using AR to display helpful arrows and directions right on top of your world. It's especially helpful when navigating tricky indoor areas, like airports, malls and train stations. Thanks to our AI-based technology called global localization, Google Maps can point you where you need to go in a matter of seconds. As part of our efforts to bring the helpfulness of Google Maps to more places, we’re now making this technology available to developers at no cost with the new ARCore Geospatial API.*Developers are already using the API to make apps that are even more useful and provide an easy way to interact with both the digital and physical worlds at once. Shared electric vehicle company Lime is piloting the API in London, Paris, Tel Aviv, Madrid, San Diego, and Bordeaux to help riders park their e-bikes and e-scooters responsibly and out of pedestrians’ right of way. Telstra and Accenture are using it to help sports fans and concertgoers find their seats, concession stands and restrooms at Marvel Stadium in Melbourne. DOCOMO and Curiosity are building a new game that lets you fend off virtual dragons with robot companions in front of iconic Tokyo landmarks, like the Tokyo Tower. The new Geospatial API is available now to ARCore developers, wherever Street View is available.*AI will continue to play a critical role in making Google Maps the most comprehensive and helpful map possible for people everywhere.",
            'img_01'=>"post-01-ai-google-maps-img-01.png",
            'img_01_credits'=>"post-01-ai-google-maps-img-01.png",
            'img_01_caption'=>"Immersive view lets you explore and understand the vibe of a place before you go",
            'img_02'=>"post-01-ai-google-maps-film-01.mp4"
        ]);

        DB::table('articles')->insert([
            'id' => "2",
            'post_title' => "Microsoft quietly deletes largest public face recognition data set",
            'post_date' => "24.06.2022",
            'post_author' =>"Madhumita Murgia",
            'post_readtime' =>"4,2 min read",
            'hashtag' =>"#ai*#facerecognition*#microsoft",
            'post_abstract' =>"Stanford and Duke universities also remove facial recognition data",
            'post_text' =>"Microsoft has quietly pulled from the internet its database of 10m faces, which has been used to train facial recognition systems around the world, including by military researchers and Chinese firms such as SenseTime and Megvii.*The database, known as MS Celeb, was published in 2016 and described by the company as the largest publicly available facial recognition data set in the world, containing more than 10m images of nearly 100,000 individuals.*The people whose photos were used were not asked for their consent, their images were scraped off the web from search engines and videos under the terms of the Creative Commons license that allows academic reuse of photos.*Microsoft, which took down the database days after the FT reported on its use by companies, said: “The site was intended for academic purposes. It was run by an employee that is no longer with Microsoft and has since been removed.”*Two other data sets have also been taken down since the FT report was published in April, including the Duke MTMC surveillance data set built by Duke University researchers, and a Stanford University data set called Brainwash.*Brainwash used footage of customers in a café called Brainwash in San Francisco’s Lower Haight district, taken through a livestreaming camera. Duke did not respond to requests for comment. Stanford said it had removed the data set after a request by one of the authors of a study it was used for. A spokesperson said the university is “committed to protecting the privacy of individuals at Stanford and in the larger community”.*All three data sets were uncovered by Berlin-based researcher Adam Harvey, whose project Megapixels documented the details of dozens of data sets and how they are being used.*Microsoft’s MS Celeb data set has been used by several commercial organisations, according to citations in AI papers, including IBM, Panasonic, Alibaba, Nvidia, Hitachi, Sensetime and Megvii. Both Sensetime and Megvii are Chinese suppliers of equipment to officials in Xinjiang, where minorities of mostly Uighurs and other Muslims are being tracked and held in internment camps.*Microsoft itself has used the data set to train facial recognition algorithms, Mr Harvey’s investigation found.*The company named the data set “Celeb” to indicate that the faces it had scraped were photos of public figures. But Mr. Harvey found that the data set included several arguably private individuals, including security journalists such as Kim Zetter, Adrian Chen and Shoshana Zuboff, the author of Surveillance Capitalism, and Julie Brill, the former FTC commissioner responsible for protecting consumer privacy.*“Microsoft has exploited the term ‘celebrity’ to include people who merely work online and have a digital identity,” said Mr. Harvey. “Many people in the target list are even vocal critics of the very technology Microsoft is using their name and biometric information to build.”*When the Financial Times previously contacted people in the database, they were unaware of their inclusion. “I am in no sense a public person, there is no way in which I’ve ceded my right to privacy,” said Adam Greenfield, a technology writer and urbanist who was included in the data set.*“It’s indicative of Microsoft’s inability to hold their own researchers to integrity and probity that this was not torpedoed before it left the building,” he said. “To me, it is indicative of a profound misunderstanding of what privacy is.”*Tech experts said Microsoft may have been in violation of the EU’s General Data Protection Law by continuing to distribute the MS Celeb data set after the regulations came into effect last year.*“They are likely to have taken it down because their lawyers expressed concern that they do not have a basis to process special category data such as faces under Article 9 of GDPR,” said Michael Veale, a technology policy researcher at the Alan Turing Institute. “They may not have a get-out clause for processing biometric data for the purposes of “uniquely identifying a natural person”.*“Particularly as the use of the data set has moved from a purely research use to something that products are being built with,” he added. “There is reason to believe that the people in data set cannot be considered to expressly and clearly have made their faces public.”*Microsoft said it was not aware of any GDPR implications and that the site had been retired “because the research challenge is over”.*Although the database has been deleted by Microsoft, it is still available to researchers and companies that had previously downloaded it. Mr Harvey said it is still being shared on open source websites.*“You can’t make a data set disappear. Once you post it, and people download it, it exists on hard drives all over the world,” he said. “Now it is completely disassociated from any licensing, rules or controls that Microsoft previously had over it. People are posting it on GitHub, hosting the files on Dropbox and Baidu Cloud, so there is no way from stopping them from continuing to post it and use it for their own purposes.”",
            'img_01'=>"post-02-ai-face-recognition-img-01.png",
            'img_01_credits'=>"David Mcnew/AFP/Getty Images",
           'img_01_caption'=>"The use of artificial intelligence and facial recognition in dense crowd spatial-temporal technology was part of a live demonstration at the Horizon Robotics exhibit during CES 2019",
            'img_02'=>"David Mcnew/AFP/Getty Images"
        ]);

        DB::table('articles')->insert([
            'id' => "3",
            'post_title' => "Cyber AI: Real defense",
            'post_date' => "17.06.2022",
            'post_author' =>"Scott Buchholz",
            'post_readtime' =>"4,4 min read",
            'hashtag' =>"#ai*#cybersecurity*#cyberai",
            'post_abstract' =>"As organizations struggle with security breaches, cyber AI can be a force multiplier, enabling security teams not only to respond faster than cyberattackers can move but also to anticipate these moves and act in advance",
            'post_text' =>"Despite making significant investments in security technologies, organizations continue to struggle with security breaches: Their adversaries are quick to evolve tactics and stay ahead of the technology curve. Humans may soon be overwhelmed by the sheer volume, sophistication, and difficulty of detecting cyberattacks.*People are already challenged to efficiently analyze the data flowing into the security operations center (SOC) from across the security tech stack. This doesn’t include the information feeds from network devices, application data, and other inputs across the broader technology stack that are often targets of advanced attackers looking for new vectors or using new malware. And as the enterprise increasingly expands beyond its firewalls, security analysts are charged with protecting a constantly growing attack surface.*Meanwhile, the cost of cybercrime continues to climb; it’s expected to double from US$3 trillion in 2015 to US$6 trillion by the end of 2021 and grow to US$10.5 trillion by 2025.The average cost of a single data breach in 2021 was US$4.24 million,2 a 10% increase from 2019. According to insurer AIG, ransomware claims alone have grown 150% since 2018.*It’s time to call for AI backup. Cyber AI can be a force multiplier that enables organizations not only to respond faster than attackers can move, but also to anticipate these moves and react to them in advance. Cyber AI technology and tools are in the early stages of adoption; the global market is expected to grow by US$19 billion between 2021 and 2025.*AI’s ability to adaptively learn and detect novel patterns can accelerate detection, containment, and response, easing the burden on SOC analysts and allowing them to be more proactive. Bonus: It can help organizations prepare for the eventual development of AI-driven cybercrimes.*Expanding enterprise attack surfaces*Organizations’ attack surfaces are exponentially expanding. As discussed in The tech stack goes physical, the adoption of 5G networks and an increase in network connections, together with a more distributed workforce and a broadening partner ecosystem, may present new risks. They’re exposing the enterprise outside of its firewalls and pushing it into customer devices, employee homes, and partner networks.* More remote workers.*Before COVID-19, only about 6% of employees worked from home. In May 2020, about 35% of them did. In the first six weeks of the 2020 lockdown, the percentage of attacks on home-based workers increased fivefold from 12% to 60%. One survey found that 51% of respondents saw an increase in email phishing after shifting to a remote working model.*For many workers, remote work is expected to remain the rule, not the exception, providing cybercriminals with many new opportunities. For example, outside of the safety of corporate firewalls and web security gateways, remote workers are easier to target. They rely on home networks and VPN connections and often use unsecured devices to access cloud-based apps and data. And legacy on-premises security equipment is typically designed to support enterprise-grade networks, not home-based internet access.*As the enterprise extends into its employees’ homes, user behavior and data activity become more diverse and deviate from previous norms. With employees logging in from atypical locations and devices at unusual times, it can be more challenging to identify anomalous behaviors, potentially leading to an increase in false positives.*Increase in network-connected devices. 5G, IoT, Wi-Fi 6, and other networking advances are driving an increase in network-connected devices. When seeking a soft attack vector, cybercriminals will be able to choose from a growing number of network-connected physical assets—29.3 billion by 2023, according to one estimate.*The unprecedented number of devices connected to these networks produce data that needs to be processed and secured, contributing to the data logjam in the SOC. It can be challenging to keep track of and manage active assets, their purpose, and their expected behavior, especially when they’re managed by service orchestrators.*Rather than being centrally located and controlled, many of these devices are spread across various remote locations, operating in multiple edge environments where they collect data to send back to the enterprise. Without proper security precautions, devices can be compromised and continue to appear to operate normally on the network, essentially becoming intruder-controlled bots that can release malicious code or conduct swarm-based attacks.*Broader ecosystem of third-party partners. An increasingly global supply chain and hosted data, infrastructure, and services have long contributed to third-party risk. And as more and more organizations integrate data with third-party applications, APIs are a growing security concern. Gartner predicts that by 2022, API abuses will become the enterprise’s most frequent attack vector.*Third-party breaches are growing in complexity. Five years ago, an intruder might use widely available malware to target specific computer systems, gain contractor credentials, and steal customer data—messy, to be sure, but with a clear source and the ability to monitor and remediate the damage.*Such an attack pales in comparison to today’s sophisticated intrusions, in which information stolen from one company can be used to compromise thousands of its customers and suppliers. Supply chain attacks can do the same by exploiting the least-secure embedded components of complex supply networks. A breach with no boundaries can be nearly impossible to monitor and remediate, with active theft potentially continuing for many years.",
            'img_01'=>"post-03-ai-security-img-01.png",
            'img_01_credits'=>"Copyright © 2021. One Tech Inc.",
            'img_01_caption'=>"Copyright © 2021. One Tech Inc.",
            'img_02'=>""
        ]);

        DB::table('articles')->insert([
            'id' => "4",
            'post_title' => "Dartmouth Summer Research Project: The Birth of Artificial Intelligence",
            'post_date' => "10.06.2022",
            'post_author' =>"James Moor",
            'post_readtime' =>"4 min read",
            'hashtag' =>"#ai*#dartmouthproject*#johnmccarthy",
            'post_abstract' =>"Held in the summer of 1956, the Dartmouth Summer Research Project on Artificial Intelligence brought together some of the brightest minds in computing and cognitive science — and is considered to have founded artificial intelligence (AI) as a field",
            'post_text' =>"In the early 1950s, the field of “thinking machines” was given an array of names, from cybernetics to automata theory to complex information processing. Prior to the conference, John McCarthy — a young Assistant Professor of Mathematics at Dartmouth College — had been disappointed by submissions to the Annals of Mathematics Studies journal. He regretted that contributors didn’t focus on the potential for computers to possess intelligence beyond simple behaviors. So, he decided to organize a group to clarify and develop ideas about thinking machines.*John approached the Rockefeller Foundation to request funding for a summer seminar at Dartmouth for 10 participants. In 1955, he formally proposed the project, along with friends and colleagues Marvin Minsky (Harvard University), Nathaniel Rochester (IBM Corporation), and Claude Shannon (Bell Telephone Laboratories).*Laying The Foundations Of AI*The workshop was based on the conjecture that, “Every aspect of learning or any other feature of intelligence can in principle be so precisely described that a machine can be made to simulate it. An attempt will be made to find how to make machines use language, form abstractions and concepts, solve kinds of problems now reserved for humans, and improve themselves.”*Although they came from very different backgrounds, all the attendees believed that the act of thinking is not unique either to humans or even biological beings. Participants came and went, and discussions were wide reaching. The term AI itself was first coined and directions such as symbolic methods were initiated. Many of the participants would later make key contributions to AI, ushering in a new era.",
            'img_01'=>"post-04-ai-dartmouth-img-01.png",
            'img_01_credits'=>"Joe Mehling",
            'img_01_caption'=>"Trenchard More, John McCarthy, Marvin Minsky, Oliver Selfridge, and Ray Solomonoff.",
            'img_02'=>"post-04-ai-dartmouth-img-02.png"
        ]);

        DB::table('articles')->insert([
            'id' => "5",
            'post_title' => "The Best Voice Assistants",
            'post_date' => "03.06.2022",
            'post_author' =>"Laravel Tennessee",
            'post_readtime' =>"7 min read",
            'hashtag' =>"#ai*#voiceassistants*#siri*#alexa*#googleassistant",
            'post_abstract' =>"The value of a voice assistant hinges on the number of things it can control. On your phone, it should be able to access apps and accomplish simple tasks. At home, it should be able to complete household commands, like switching the light bulbs on and the thermostat off. We focused our research on these three voice assistants",
            'post_text' =>"The best voice assistants: Amazon Alexa*Amazon Alexa can answer general questions and perform tasks such as providing a news briefing or calendar reminder. The voice assistant recently gained a Follow-up Mode that allows you to give multiple commands to Alexa. Simply give your follow-up command after your first, and Alexa will respond without having to be woken up or reactivated. More importantly, these conversational capabilities show that Alexa is keeping pace in the quickly evolving world of voice assistant technology. Research suggests that she is learning more quickly than the competition, exhibiting an increasing ability to handle natural language requests.*Amazon Alexa boasts the greatest compatibility with other smart home devices of all the voice assistants we compared. Most voice assistants work with popular smart home picks like the Philips Hue lights and the Ring doorbell camera. Still, Alexa is compatible with 7,400 brands and counting -- contrast that with Google Assistant's roughly 1,000 and Siri's 50-ish. Granted, Google Assistant is catching up, but Alexa still leads the pack when it comes to the number of options you have for automating your home -- an important feature if you want to shop third-party devices as you build your smart home.*Most voice assistants will help you complete general tasks, but Alexa's connection to Amazon offers the most seamless shopping experience. You'll need an Amazon Prime membership to shop, but the service makes it easy to place, cancel, and track orders. You can even ask Alexa if Amazon is offering any exclusive deals.*A recent study by Perficient Digital revealed that Amazon Alexa has a slight tendency to answer questions incorrectly or not provide a relevant answer. At times, it might even take a few attempts until you get the answer you seek. However, it is important to note that this is also due to Alexa now answering a much larger range of questions -- the likelihood of inaccurate responses increases with the number of prompts. Lee Mallon, founder of voice and mobile application company Rarely Impossible, explained that while useful, 'voice assistant technology is still in the early stages and requires a learning curve.' It takes a little practice to learn how to phrase voice commands to get consistent and effective responses.*Unlike its leading competitors Google Assistant and Siri, Alexa is not pre-installed into mobile phones. You can still use the voice assistant by downloading the Amazon Alexa app, but it isn't as seamless as simply activating Google Assistant or Siri by voice.*Second-best voice assistants: Google Assistant*While the capabilities of voice assistants are constantly changing as companies release new updates, a test of more than 4,000 questions led by Stone Temple before the Perficient Digital merger, Google Assistant consistently outperformed other industry leaders, repeatedly recognizing and correctly responding to questions. If you have a Google Home speaker, Google Assistant can understand two commands at the same time -- a step up from Amazon Alexa's Follow-Up Mode. Alexa can tell you the indoor temperature and then adjust the thermostat, but Google Assistant can adjust the thermostat and also switch on the TV. Thanks to newer, smaller technology, Google Assistant is also faster.*Google Assistant falls behind Alexa when it comes to smart device compatibility, but the voice assistant is rapidly catching up. In 2018 Google launched routines -- a feature identical to Amazon Alexa's routines -- allowing you to string multiple actions together using a single command. For example, say 'Hey Google, good morning, and your assistant will turn on the lights, tell you the weather, and stream music. Google Assistants are also now compatible with everything from refrigerators to third-party smart displays and can understand commands made in pairings of languages, which is important in bilingual households. Continued compatibility and language advancements are a good sign that Google Assistant won't be an outdated choice anytime soon..*Unsurprisingly, Google Assistant has better compatibility with Google brands. Due to a May 2019 merger, those brands now include the Nest smart home suite. When asking questions, your assistant will look for the answer on Google -- the most popular search engine in the world. Alexa, on the other hand, uses Bing..*Although Google Assistant is quickly gaining compatibility with popular home automation and home security services, Alexa is the industry leader when it comes to voice assistant integration. While Google is moving to restrict third-party compatibility in an effort to control ecosystem security, Amazon has more of an open-door policy with more than 60 000 compatible smart home devices. Google's count is a fraction of Amazon's at 10 000. For those who prioritize flexibility when automating their home, Alexa is the better option..*Third-best voice assistants: Apple Siri.*When choosing a voice assistant, it makes sense to consider the technological ecosystem of your home or the brands and devices you use. Opting for Siri-enabled products can lead to a more streamlined tech experience for those who are loyal to the Apple ecosystem. Apple's products excel at leveraging each other's strengths -- iPads, HomeKit devices, and the HomePod smart speaker are specifically designed to work better together..*Siri, who comes pre-downloaded on the world's 1.4 billion active Apple devices, works with smart devices that are compatible with Apple's home automation service HomeKit. The number of integrations is limited compared to Amazon and Google, but Apple regulates what is available to ensure the products are effective and easy to use. Activating an automation feature is as simple as giving a regular command, which stands in contrast to specialized activation words required by Alexa and Google Assistant. Better still, if you have a HomePod, any HomeKit products you already have set up will integrate with the speaker on their own during setup..*Siri's main advantage over competitors is the ability to understand multiple languages. The voice assistant currently understands 21 languages, compared to Alexa's three and Google Assistant's four. It's important to recognize that Siri only supports English when using the Apple HomePod smart speaker. Still, her multilingual capabilities on the iPhone make her a strong option for those who speak a language outside of Alexa or Google Assistant's limited options (English, French, German, Japanese)..*The biggest drawback of Siri is that it doesn't have many voice applications. The tight focus on the Apple ecosystem means popular services like Spotify or Pandora aren't accessible through Siri. Having an iTunes account and skipping other music services isn't an issue for those loyal to Apple. But for those who enjoy third-party services, a more flexible voice assistant is the better bet..*While Siri will allow you to control basic home automation features through HomeKit devices, other devices with the voice assistant aren't quite as versatile. For example, the HomePod smart speaker won't allow you to add events to your calendar through Siri and cannot identify different voices. There's no reason not to use Siri for those with Apple products, but for those who want more versatile voice assistant devices for their kitchen or living room, Alexa and Google Assistant devices are the way to go..*What is the future of voice assistants?.*Current market trends suggest that voice assistant technology will continue to gain popularity and adoption. The Voicebot.ai study on consumer adoption for smart speakers revealed that around 20% of the U.S. population has access to smart speakers today, which is up from less than 1% just two years ago. In addition, the study reveals that consumer adoption of voice assistant technology is consistently exceeding industry expectations. Put simply, voice assistant technology is a large focus of the world's tech giants and will soon be available in everything from cars to earbuds.",
            'img_01'=>"post-05-ai-voice-assistants-img-01",
            'img_01_credits'=>"© Common Sense Media",
            'img_01_caption'=>"",
            'img_02'=>""
        ]);

        DB::table('articles')->insert([
            'id' => "6",
            'post_title' => "Hanson Robotics’ most advanced AI-powered robot, Sophia",
            'post_date' => "27.05.2022",
            'post_author' =>"Catherine Gray",
            'post_readtime' =>"4 min read",
            'hashtag' =>"#ai*#sophiat*#hansonrobotics",
            'post_abstract' =>"Hanson Robotic’s AI powered science fiction robot, Sophia is a unique combination of science, engineering and artistry depicting the future of robotics",
            'post_text' =>"As the world’s first robot citizen, and the first robot Innovation Ambassador for the United Nations Development Programme, Sophia is a global name having made appearances in worldwide conferences as well as daytime TV shows in many countries. The unique blend of technology acts as a framework for cutting-edge robotics and AI research, particularly for understanding human-robot interactions and their potential service and entertainment applications.*Here, we look at how Sophia has been developed over the years.*2007 – Founding of pioneering robot company, Hanson Robotics*Hanson Robotics was founded in 2007 by David Hanson and was originally based in Texas. Since its founding 15 years ago, the team has built a worldwide reputation for creating human-like robots. Hanson founded the company to pursue his fascination with art, science fiction and philosophy that pushed him to think about what the future of robots could look like.*2016 – Activating Sophia the robot*In February of 2016, Hanson Robotics activated Sophia and the robot made its first public appearance in mid-March of the same year. Just one year later, Sophia was given Saudi Arabian citizenship, becoming the first robot to receive citizenship of any country. One month later, Sophia was named the United Nations Development Programme's first Innovation Champion.*2018 – Adding more AI features to Sophia*As of 2018, Sophia's architecture includes scripting software, a chat system, and OpenCog, an AI system designed for general reasoning. In the same year, Sophia was upgraded with functional legs and the ability to walk. *Hanson also embedded Alphabet’s speech recognition technology which is designed to get smarter over time. With this technology, Hanson hoped Sophia would be a suitable companion for the elderly at nursing homes or be used to help crowds at large events or parks.*2019 – Creating ‘Little Sophia’*Following the launch and activation of Sophia, Hanson Robotics released “Little Sophia” as a companion that could teach children how to code. During the same year, Sophia displayed the ability to create drawings, including portraits displaying the robots ability to improve as it makes more and more interactions.*2021 – Robotics technology joining the metaverse*More recently, it has been announced that a virtual anime version of Sophia will be released in 100 non-fungible tokens that can interact autonomously with people in a gamified environment. *Jeanne Lim, the former CEO of Hanson Robotics, who is now the co-founder and CEO of beingAI, the startup that created Sophia’s official virtual version for the interactive NFT, said she hopes the new AI being will bring together humanity and technology “to help humans attain our true nature of unconditional love and pure possibilities.",
            'img_01'=>"post-06-ai-sophia-robotics-01.png",
            'img_01_credits'=>"Catherine Gray",
            'img_01_caption'=>"Copyright © 2022. Hanson Robotics Ltd.",
            'img_02'=>"Copyright © 2022. Hanson Robotics Ltd."
        ]);


    }
}
