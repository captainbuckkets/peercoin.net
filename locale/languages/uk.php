<?php
$lang['uk'] = array();
$lang['uk'] += array(
	//Developers
	'developers.rapid_pace' => 'Розвиток peercoin просувається швидкими темпами.',
	'developers.core_protocol' => 'Основний протокол',
	'developers.core_protocol_desc' => 'Майбутні випуски основного протоколу гаманця містять наступні функції:',
	'developers.cold_wallet_minting' => 'Створення монет з офлайновим гаманцем',
	'developers.cold_wallet_minting_desc' => 'В даний час, щоб створювати нові монети, користувачі повинні тримати гаманець підключеним до мережі. Цей режим звісний як <strong>гарячий гаманець</strong>. Гарячі гаманці піддаються більшому ризику і шкідливі програми можуть вкрасти ваші монети, тому що гаманець повинен залишатися підключеним до інтернету під час процесу створювання монет. У наступних версіях Peercoin спеціальні <strong>створювальні ключі</strong> дозволять користувачам створювати нові монети, зберігаючі свої ключі витрат відключеними від інтернету.',
	'developers.optional_checkpointing' => 'Створення контрольних точок на свій розсуд',
	'developers.optional_checkpointing_desc' => 'На сьогодні мережа використовує централізовані контрольні точки для захисту від атак. Потреба в цій безпеці зменшується в той час як мережа зростає, а в майбутніх версіях ці контрольні точки стануть необов\'язковими. У наступних версіях контрольні точки за замовчуванням будуть відключені.',
	'developers.peercoin_ecosystem' => 'Екосистема Peercoin',
	'developers.peer4commit' => 'Хотіли б ви взяти участь в розробці Peercoin <strong> та </strong> отримувати за це гроші? Ось ваш шанс! <a href="https://peer4commit.com"> Peer4commit </a> надає центральний хаб для розробки. Ви можете:',
	'developers.peer4commit.1' => 'Виберіть проект на сайті, працюйте над ним, та отримуйте за це монети peercoin в якості нагороди.',
	'developers.peer4commit.2' => 'Виберіть проект, який ви б хотіли підтримати, та вкладайте в нього монети peercoin.',
	'developers.peer4commit.3' => 'Вигадайте новий проект, запропонуйте його, та отримайте грошову підтримку на його розвиток.',
	'developers.what_are_you_waiting_for' => 'Ну та й чого ти чекаєш?',
	'developers.get_started' => 'Початок роботи з Peer4commit',
	'developers.notable_community_projects' => ' Діючі проекти спільноти',
	'developers.peershares_desc' => '<b>Peershares</b> - це недорога та децентралізована бухгалтерська книга, яка буде використовуватися в бізнесі для залучення коштів, відстежування прав власності на частки та розподіл дівідендів в автоматичному режимі. Кожен бізнес, який використовує Peershares, матиме свій власний, незалежний від інших, ланцюг блоків, та який можна дешево та легко захистити за допомогою методу proof-of-stake системи Peercoin.',
	'developers.peerbox_desc' => '<b>Peerbox</b> - це захищена операційна система для створення монет і роботи вузлів Peercoin, яка зараз знаходиться у стадії активної розробки. Вона фокусується на недорогих, енергенично-ефективних пристроях, таких як Raspberry Pi, які сумісні з метою Peercoin впроваджувати енергоефективну криптовалюту. Якщо ASIC - це термін для спеціалізованого та енергоефективного створення монет, то Peerbox - це ASIC для методу Proof-of-Stake.',
	'developers.nubits_desc' => '<b>NuBits</b> - це проект від автору Peershares - Джордана Лі. NuBits це перша реалізація Peershares. Вона призначена для вирішення проблеми волатильності криптовалют.',
	'developers.devforums' => 'Знайдіть інші іноваційні ідеї на наших <a href="https://talk.peercoin.net/c/projects">форумах</a> або приєднуйтесь до <a href="https://discord.gg/m294ReV">чату</a>, щоб обговорити та поділитися своїми.',
);
$lang['uk'] += array(
	//Exchanges
	'exchanges.what_are' => 'Що таке біржа?',
	'exchanges.what_are_desc' => '<b>Біржі</b> дозволяють вам торгувати офіційними валютами, такими як долар або євро, для того, щоб купувати чи продавати Peercoins. Біржі також сприяють розвитку торгівлі між peercoins та іншими криптовалютами, наприклад Bitcoin.',
	'exchanges.buy_sell' => 'Виставлення ордеру',
	'exchanges.buy_sell_desc' => 'Торги починаються з виставлення ордерів на покупу та продаж. Зробіть <b>ордер на покупку</b> для того щоб купити необхідну кількість Peercoins за вказаною ціною. Зробіть <b>ордер на продаж</b> щоб запропонувати Peercoins. Коли різні замовлення перекриваються в одній ціні, тоді автоматично відбувається угода та рахунки обох сторін поповнюються на відповідну кількість валют, яки були зазначені в ордерах. <b>Ринковий ордер</b> буде виконаний миттєво за поточною ціною.',
	'exchanges.fees' => 'Комісії',
	'exchanges.fees_desc' => 'Кожен раз, коли відбувається торг, невеликий відсоток забирається біржою за проведення транзакції. Це відомо як <b>торгова комісія</b>. Деякі біржі також стягують <b>комісію за зняття</b> коли ви знімаєте свою нову валюту з біржі.',
	'exchanges.choosing' => '<b>Знайдіть біржу з Peercoin використовуючи <a href="http://coinmarketcap.com/currencies/peercoin/#markets">CoinMarketCap</a></b>',
	'exchanges.disclaimer' => 'Нагадування: Не забудьте забрати свої Peercoins з біржу після їх придбання. Зберігання монет у власному гаманці є більш безпечним, а також надає вам право на нагороду у 1&#37; за створення монет Peercoin.',
	'exchanges.location' => 'Місцезнаходження',
	'exchanges.notes' => 'Примітки',
	'exchanges.visit' => 'Відвідати',
);
$lang['uk'] += array(
	'footer.links' => 'Посилання',
	'footer.tools' => 'Інструменти',
	'footer.exchanges' => 'Біржі',
	'footer.mining' => 'Майнінг',
	'footer.greenbar' => 'Чат з членами спільноти та розробниками:',
);
$lang['uk'] += array(
	// FAQ
	'faq.yes' => 'Так',
	'faq.no' => 'Ні',
	'faq.sources' => 'Джерела',
	'faq.q1' => 'Чи був Peercoin чесно запущений?',
	'faq.q1_ans' => 'Санні Кінг оголосив про запуск Peercoin за 9 днів до випуску. Не було ніяких блоків, добутих до запуску. Один учасник форуму написав, «[Санні Кінг] опублікував посилання на джерело в іншому треді в обіцяний час (за 5 хвилин до 18:00 UTC). Там не було ніяких заздалегідь створених блоків. На той час як я скомпілював гаманець з вихідних кодів та запустив все щоб працювало, там було здобуто 5 блоків.»',
	'faq.q2' => 'Яка мета контрольної точки?',
	'faq.q2_ans' => 'Починаючи з версії 0.2, централізована система контрольних точок більше не є важливою частиною протоколу. Його мета полягає в тому, щоб захистити мережу в початковий період росту та забезпечити плавний шлях оновлення та розвитку. Централізована система контрольних точок тепер поступово слабшає і буде в кінці-кінців видалена, щоб досягти такого ж рівня децентралізації як і у Bitcoin. Існують контрольні точки лише в якості міри безпеки: якщо щось страшне станеться, у нас є контрольні точки для відновлення.',
	'faq.q3' => 'Peercoin це клон Bitcoin?',
	'faq.q3_ans' => 'Peercoin - одна з дійсно унікальних альтернативних валют. Хоча її код заснований на Bitcoin, Peercoin є першою валютою, в якій для захисту мережі представлена система Proof of Stake. Proof of Work також використовується в Peercoin задля сприяння справедливого розподілу монет, але не є необхідним для забезпечення безпеки мережі.',
	'faq.q4' => 'Чи не є Peercoin валютою - «мильною бульбашкою»?',
	'faq.q4_ans' => 'Peercoin несе інноваційні особливості, має активних розробників та значну участь спільноти. Станом на 29 травня 2017 року Peercoin існує майже вже п\'ять років і має ринкову капіталізацію в розмірі понад $37 мільйонів доларів США.',
	'faq.q5' => 'Чи 1&#37; винагороди розповсюджується на всіх користувачів?',
	'faq.q5_ans' => 'Коли вся грошова маса зростає за рахунок процесу створення, всі власники Peercoin, які беруть участь в створенні, зберігають свою відносну частку мережі. Хоча великих часток створюють більшу кількість Peercoins, вони не можуть, в процентному вираженні, вириватися вперед інших творців монет.',
	'faq.q6' => 'Чи схильний Peercoin до інфляції?',
	'faq.q6_ans' => 'Зміна грошової маси PPC визначається:',
	'faq.q6_l1' => 'Proof of Work майнінг (збільшує запас)',
	'faq.q6_l2' => 'Кількість транзакцій (зменшує запас на 0.01 PPC за транзакцію)',
	'faq.q6_l3' => 'Створення монет Proof of Stake (збільшує запас зі швидкістю до 1&#37; в рік)',
	'faq.q6_ans2' => 'Завдяки розширенню процесу створення монет, інфляція Peercoin постійно залишалася нижчою ніж 5&#37; в першій половині 2014 року. При нинішніх темпах розвитку, ця ставка буде знижуватися й далі, що робить Peercoin менш інфляційною і більш стійкою криптовалютою, ніж більшість інших.',
);$lang['uk'] += array(
	// Global
	'homepage_title' => '﻿Peercoin - безпечна та стійка криптомонета.',

	'second_ago' => 'секунду тому',
	'seconds_ago' => 'секунд тому',

	'website' => 'Сайт',
	'forum' => 'Форум',
);$lang['uk'] += array(
	// Header
	'header.get_started' => 'Розпочати',
	'header.newcomers' => 'Новичкам',
	'header.investors' => 'Інвесторам',
	'header.merchants' => 'Торговцям',
	'header.miners' => 'Майнерам',
	'header.developers' => 'Розробникам',
	'header.tutorials' => 'Підручники',
	'header.learn' => 'Дізнатися',
	'header.frequently_asked_questions' => 'Часто задавані питання',
	'header.peercoin_whitepaper' => 'Технічний опис',
	'header.exchanges' => 'Біржі',
	'header.mint_peercoins' => 'Створення',
	'header.mining-guide' => 'Майнінг',
	'header.wallet' => 'Гаманці',
	'header.resources' => 'Ресурси',
	'header.community' => 'Спільнота',
	'header.languages' => 'Мови',
);
$lang['uk'] += array(
	// Index page
	'index.why_peercoin' => 'Чому Peercoin',
	'index.download_wallet' => 'Завантажити гаманець',
	'index.price' => 'Ціна',
	'index.market_cap' => 'Ринкова капіталізація',
	'index.total_supply' => 'Загальний обсяг пропозиції',
	'index.last_updated' => 'Останні оновлення:',
	'index.last_updated_never' => 'ніколи',
	'index.why_peercoin_q' => 'Чому <strong>Peercoin</strong>?',
	'index.why_peercoin_desc' => 'Peercoin прагне бути найбезпечнішою криптовалютою з мінімальними витратами, винагороджуючи всіх користувачів за зміцнення мережі, надаючи їм 1&#37; річного доходу за створення монет.',
	'index.built_to_last' => 'Створена, <b>щоб залишитися назавжди</b>',
	'index.built_to_last_desc' => 'Перша в світі Proof-of-Stake криптовалюта.',
	'index.fair_distribution' => '<b>Справедливий</b> розподіл',
	'index.fair_distribution_desc' => 'Ніякого інсайдерського попереднього продажу або миттєвого майнінгу.',
	'index.transparent_protocol' => 'Стабільний та <b>безпечний</b>',
	'index.transparent_protocol_desc' => 'Захищає ваші інвестиції з 2012 року.',
	'index.energy_efficient' => '<b>Енергоефективна</b>',
	'index.energy_efficient_desc' => 'Створюйте монети на любому пристрої',
	'index.learn_more' => 'Дізнатися більше',
	'index.get_started' => 'Розпочати',
	'index.newcomers' => 'Новичкам',
	'index.newcomers_desc' => 'Дізнайся як купувати, продавати, витрачати та зберігати Peercoin.',
	'index.investors' => 'Інвесторам',
	'index.investors_desc' => '1&#37; PPC винагороди при створенні.',
	'index.merchants' => 'Торговцям',
	'index.merchants_desc' => 'Час для зниження комісій за транзакції.',
	'index.miners' => 'Майнерам',
	'index.miners_desc' => 'Використовуйте ваше обладнання для майнінгу з користю.',
	'index.developers' => 'Розробникам',
	'index.developers_desc' => 'Подивіться на іновації.',
	'index.newsletter' => 'Розсилка новин',
	'index.newsletter_placeholder' => 'Введіть вашу адресу e-mail...',
	'index.newsletter_submit' => 'Приєднатися!',
);
$lang['uk'] += array(
	//Investors
	'investors.established_network' => 'Створена мережа',
	'investors.established_network_desc' => 'Peercoin був запущений в 2012 році, що робить його однією з найстаріших і найнадійніших кріптовалютних мереж в світі.',
	'investors.limited_supply' => 'Обмежена пропозиція',
	'investors.limited_supply_desc' => 'Річний рівень інфляції Peercoin протягом 2014 року складав в середньому нижче 5&#37; і продовжує падати.',
	'investors.efficient_security' => 'Ефективні заходи безпеки',
	'investors.efficient_security_desc' => 'Peercoin - перша Proof-of-stake криптовалюта, що означає, що вона не вимагає великих обчислювальних потужностей для захисту мережі. Всі деталі можна дізнатися в <a href="whitepaper">Технічному описі Peercoin </a>.',
	'investors.guaranteed_returns' => 'Гарантований прибуток',
	'investors.guaranteed_returns_desc' => 'Після того, як монети Peercoin утримуються протягом 30 днів у гаманці, вони починають заробляти річну винагороду в розмірі 1&#37;. Читайте докладніше про <a href="minting">створення</a>. Також ви можете починати купувати монети на одній з багатьох <a href="exchanges"> бірж з Peercoin</a>.',

);
$lang['uk'] += array(
	//Merchants
	'merchants.instant' => 'Отримуй гроші миттєво',
	'merchants.instant_desc' => 'Всі транзакції обробляються практично миттєво за допомогою технології ланцюгу блоків Peercoin. Дослідник блоків миттєво перевіряє вхідний платіж.',
	'merchants.no_chargebacks' => 'Ніяких зворотних платежів',
	'merchants.no_chargebacks_desc' => 'Як тільки платіж підтверджено мережею, він захищається криптографічним шифруванням світового класу, що робить неможливим відкликання платежу.',
	'merchants.no_transaction_fees' => 'Зменшуйте комісії за транзакції',
	'merchants.no_transaction_fees_desc' => 'Щоб зробити платіж, кожен відправник платить комісію в розмірі 0.01 Peercoin. Як продавець, ви не платите абсолютно нічого.',

);$lang['uk'] += array(
	'mineguide.title' => 'Дотримуйтесь цих кроків, щоб почати майнити Peercoin!',
	'mineguide.step1' => 'Встановити програмне забезпечення гаманця',
	'mineguide.step1_desc' => 'Якщо ви ще не зробили цього, завантажте <a href="download">гаманець Peercoin</a>.',
	'mineguide.step2' => 'Виберіть пул для майнінгу',
	'mineguide.step2_poollist' => 'Пули, пов\'язані з Peercoin:',
	'mineguide.step2_multipoollist' => 'Мультивалютні пули:',
	'mineguide.step3' => 'Зареєструватися на цьому пулі',
	'mineguide.step3_desc' => 'Дотримуйтесь інструкцій на веб-сайті пулу. Ви також можете знайти більше пулів <a href="https://wiki.peercointalk.org/index.php?title=List_of_services#Mining_Pools">тут</a>.',
);
$lang['uk'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'Сумісний з Bitcoin',
	'mining.compatible_with_bitcoin_desc' => 'Peercoin використовує той же алгоритм майнінгу, що й Bitcoin, відомий як SHA-256. Будь-яке програмне забезпечення, яке працює з мережами Bitcoin, може так само бути використано для майнінгу Peercoin.',
	'mining.fair_distribution' => 'Справедливий розподіл',
	'mining.fair_distribution_desc' => 'Технологія майнінгу Proof of Work використовується щоб розподіляти нові монети, тоді як захист системи підтримується виключно технологією Proof of Stake. Це означає, що уразливості майнінгу Bitcoin, такі як Selfish Mining, не впливають на безпеку Peercoin.',
	'mining.sustainable_reward' => 'Стійка винагорода',
	'mining.sustainable_reward_desc' => 'Нагорода за майнінг блоку поступово знижується, оскільки обчислювальна потужність мережі зростає. Згодом, вплив майнінгу на зростання грошової маси буде постійно скорочуватися.',
);$lang['uk'] += array(
	'mintguide.title' => 'Дотримуйтесь інструкцій у вашому клієнті Peercoin щоб почати створювати монети!',
	'mintguide.qt_step1' => 'Переконайтеся, що ваш гаманець зашифрований надійною кодовою фразою. Запишіть її та зберігайте в безпеці; якщо ви забудете кодову фразу, то ви втратите свої монети. Опції щодо шифрування гаманця можна знайти у вкладці налаштувань в програмі Peercoin-QT.',
	'mintguide.qt_step2' => 'Для того, щоб почати створювати монети, пройдіть у вкладку допомога -> вікно відлагодження -> консоль і введіть: <br><kbd>walletpassphrase abc 999999 true</kbd><br>, де «abc» - ваш пароль, а «999999» - час в секундах, який ви бажаете витратити на створення монет. Ви можете змінити кількість часу коли завгодно, але зазвичай простіше виставити відразу великі значення. Якщо Ваш пароль містить прогалини, то візьміть його у лапки.',
	'mintguide.qt_step3' => 'Очистіть Ваш пароль, натиснувши Ctrl-L.',
	'mintguide.qt_step4' => 'Ви можете перевірити, як проходить процес створення монет, глянувши на замок в нижньому правому куті клієнта. Через кілька секунд він повинен розблокуватися. Якщо Ви наведете на нього курсор миші, повинно з\'явитися повідомлення «Гаманець зашифрований і в даний момент відкритий тільки для створення блоків».',
);
$lang['uk'] += array(
	// minting
	'minting.mint_anywhere' => 'Створюй монети де завгодно',
	'minting.mint_anywhere_desc' => 'Більшість криптовалют вимагають для майнінгу спеціальне програмне забезпечення, але Peercoin можна створювати на будь-якому комп\'ютері. Створення монет - енергоефективний процес, тому що він заснований на кількості Peercoins, які у Вас є, а не на обчислювальній потужності.',
	'minting.secure_the_network' => 'Захистіть мережу',
	'minting.secure_the_network_desc' => 'Кожен раз, коли ви створюєте монети, з\'являється блок і ваші монети допомагають захистити мережу. Щоб атакувати мережу Peercoin, зловмисник повинен контролювати більшість процесів створення монет, що в кінцевому підсумку може завдати шкоди його власним інвестиціям.',
	'minting.earn_reward' => 'Зароби нагороду',
	'minting.earn_reward_desc' => 'Створення монет приносить вам 1&#37; в рік. Монети вже можуть бути створені через 30 днів після того, як вони були передані, а після 90 днів шанси на успіх будуть максимальними. Якщо ви створюєте монети частіше, то ваш прибуток збільшується!',

);$lang['uk'] += array(
	//Newcomers
	'newcomers.getting_started' => 'Початок роботи з Peercoin',
	'newcomers.downlaod_wallet' => 'Завантажити програму-гаманець',
	'newcomers.download_wallet_desc' => 'Пройдіть на <a href="download">сторінку завантаження</a>, там ви знайдете програму для зберігання і управління вашими новими монетами.',
	'newcomers.buy_from_exchange' => 'Купуйте на біржі',
	'newcomers.buy_from_exchange_desc' => 'Надішліть ваші гроші на <a href="exchanges">біржу з Peercoin</a>, де ви зможете купувати у інших торговців на відкритому ринку.',
	'newcomers.withdraw_coins' => 'Виведення ваших монет',
	'newcomers.withdraw_coins_desc' => 'Приєднуйтеся у володіння вашими peercoins, відправивши їх на адресу, створену гаманцем. Це захистить вас у тому разі, якщо біржа закриється в той момент, коли Ваші монети будуть в торгах.',
	'newcomers.learn_more' => 'Дізнайтесь більше',
	'newcomers.learn_more_desc' => 'Тепер, коли ваші монети знаходяться в гаманці, час дізнатися, як збільшити інвестиційний капітал зі <a href="minting">створенням монет Peercoin</a>.',

);$lang['uk'] += array(
	'pig.title' => 'Дотримуйтесь наступних кроків, щоб приймати Peercoins на свому сайті:',
	'pig.step1' => 'Використовуйте вкладку Bulk Wallet на <a href="http://wallet.peercointalk.org">wallet.peercointalk.org</a>, щоб попередньо згенерувати велику кількість адрес Peercoin. Скопіюйте та вставте список згенерованих значень, розділених комами (CSV), в захищений текстовий файл на Вашому комп\'ютері. Створіть резервну копію файлу в безпечному місці.',
	'pig.step2' => 'Імпортуйте публічні адреси Peercoin в таблицю бази даних на вашому веб-сервері. Не імпортуйте приватні ключі, зберігайте їх в офлайновому режимі або поза комп\'ютеру, щоб захистити від хакерів.',
	'pig.step3' => 'Забезпечте можливість клиєнту сплатити за покупки на вашому сайті за допомогою Peercoin. При виборі цієї опції, відобразіть одну адресу з бази даних як платіжну адресу для цього клієнта і збережіть її разом із замовленням.',
	'pig.step4' => 'Використовуйте дослідник блоків для виявлення вхідних платежів. Один з варіантів такого сервісу Ви можете знайти на <a href="http://ppc.blockr.io">ppc.blockr.io</a>.',
	'pig.step5' => 'Монети Peercoin, відправлені на імпортовані адреси, захищені приватними ключами. Щоб витратити їх, використовуйте вихідний файл гаманця, створений в кроці 1.',
	'pig.step6' => 'Якщо у вас виникнуть будь-які проблеми, не соромтеся публікувати їх на <a href="https://talk.peercoin.net">форумах спільноти</a>.',
	
);
$lang['uk'] += array(
	'waldownload.download' => 'Завантажити',
	'waldownload.source' => 'Вихідний код',
	'waldownload.license' => 'Ліцензія',
	'waldownload.other_platforms' => 'Інші платформи',
	'waldownload.signatures' => 'Підписи',
	'waldownload.qt_title' => 'Peercoin-QT',
);$lang['uk'] += array(
	// Wallet
	'wallet.title' => 'Гаманці',
	'wallet.desc' => 'Гаманець Peercoin - програмне забезпечення, що використовується для зберігання та проведення різних операцій з монетами Peercoins між користувачами. Більше інформації про те, як користуватися програмним забезпеченням вашого гаманця, ви можете отримати відвідавши сторінку <a href="newcomers">Новичкам</a>.',
	'wallet.peercoinqt' => 'Peercoin-QT<br>(основний протокол)',
	'wallet.peercoinqt_desc' => 'Peercoin-QT - це основний протокол Peercoin, який побудований та підтримується розробником Peercoin Санні Кінгом. Він отримує оновлення лише з найвищим пріоритетом.',
	'wallet.paper_wallet' => 'Паперовий гаманець',
	'wallet.paper_wallet_desc' => 'Паперовий гаманець залишається повністю офлайн, поза мережою, надрукованим на аркуші паперу для безпечного зберігання. Використовуйте паперовий гаманець, якщо ви хочете обмежити доступ до ваших монет і плануєте зберігати їх протягом тривалого періоду часу.',
	'wallet.android_wallet' => 'Android-гаманець',
	'wallet.android_wallet_desc' => 'Мобільний гаманець Peercoin, який дозволяє вам керувати вашими монетами без необхідності утримання повнорозмірного ланцюга блоків у вашому телефоні. Це заощаджує дорогоцінний простір на вашому андроїд-пристрої і дозволяє брати монети з собою, де б ви не були.',
	'wallet.download' => 'Завантажити',
	'wallet.visit_site' => 'Відвідайте',
);
$lang['uk'] += array(
	//Whitepaper
	'whitepaper.download_pdf' => 'Завантажити PDF',
	'whitepaper.software' => 'Технічний опис доступний у форматі портативного документу (PDF). Будь ласка, використовуйте найбільш придатне для вас <a href="http://pdfreaders.org/">програмне забезбечення для читання</a>.',

);
