<?php
$currentPage = 'gallery';
$pageTitle = 'Past Events Gallery – Weddings & Decor Showcase';
require_once __DIR__ . '/includes/header.php';

$galleryItems = [
    // Weddings
    [
        'title' => 'Leena & Puneet 3-Day Gurgaon Wedding',
        'category' => 'weddings',
        'cat_name' => 'Weddings',
        'image' => 'images/778274285_17981582922098216_4890406560374325135_n.jpg',
        'venue' => 'Luxury Farm Corridor, Gurgaon'
    ],
    [
        'title' => 'Royal Lotus Mandap & Grand Varmala Stage',
        'category' => 'weddings',
        'cat_name' => 'Weddings',
        'image' => 'images/777165342_17981585163098216_7163747037389473334_n.jpg',
        'venue' => 'Ghitorni Greens, Delhi NCR'
    ],
    [
        'title' => 'Couture Floral Wedding Passage & Entry',
        'category' => 'weddings',
        'cat_name' => 'Weddings',
        'image' => 'images/776401410_17981582904098216_5256646098222551676_n.jpg',
        'venue' => 'Chattarpur Luxury Farms, Delhi'
    ],

    // Sangeet & Cocktail
    [
        'title' => 'Blingy Sangeet Stage with LED Intelligent Lights',
        'category' => 'sangeet',
        'cat_name' => 'Sangeet & Cocktail',
        'image' => 'images/775375669_17981582943098216_6457838592165751874_n.jpg',
        'venue' => 'MG Road Farmhouse, Gurgaon'
    ],
    [
        'title' => 'Neon Glamour Cocktail Soiree',
        'category' => 'sangeet',
        'cat_name' => 'Sangeet & Cocktail',
        'image' => 'images/779179741_17981585136098216_3312367269288202906_n.jpg',
        'venue' => 'Golf Course Road, Gurgaon'
    ],
    [
        'title' => 'High-Energy DJ & Sangeet Dance Floor',
        'category' => 'sangeet',
        'cat_name' => 'Sangeet & Cocktail',
        'image' => 'images/781137975_17981582958098216_3442711876608808436_n.jpg',
        'venue' => 'The Grand Ballroom, Delhi'
    ],

    // Haldi & Mehendi
    [
        'title' => 'Yellow Marigold & Phoolon Ki Holi Haldi',
        'category' => 'haldi',
        'cat_name' => 'Haldi / Mehendi',
        'image' => 'images/775065076_17981585127098216_6214631638899169405_n.jpg',
        'venue' => 'Ghitorni Studio Lawn, Delhi'
    ],
    [
        'title' => 'Boho Chic Pastel Mehendi Lounge',
        'category' => 'haldi',
        'cat_name' => 'Haldi / Mehendi',
        'image' => 'images/777766972_17981582901098216_4491564654282103710_n.jpg',
        'venue' => 'Sohna Road Sanctuary, Gurgaon'
    ],
    [
        'title' => 'Carnival Themed Haldi Setup with Custom Props',
        'category' => 'haldi',
        'cat_name' => 'Haldi / Mehendi',
        'image' => 'images/775798826_17981582877098216_2744459140483522910_n.jpg',
        'venue' => 'Chattarpur Heritage Villa, Delhi'
    ],

    // Private Events
    [
        'title' => 'Silver Jubilee Milestone Anniversary',
        'category' => 'private',
        'cat_name' => 'Private Events',
        'image' => 'images/775065076_17981585178098216_8359072005457608149_n.jpg',
        'venue' => 'Private Estate, Gurgaon'
    ],
    [
        'title' => 'VIP Candlelight Cocktail Dinner Soiree',
        'category' => 'private',
        'cat_name' => 'Private Events',
        'image' => 'images/774969838_17981585181098216_2058163297949165773_n.jpg',
        'venue' => 'Aerocity Rooftop, New Delhi'
    ],
    [
        'title' => 'Intimate Farmhouse Celebration & Sundowner',
        'category' => 'private',
        'cat_name' => 'Private Events',
        'image' => 'images/779200901_17981582934098216_3258682262043830604_n.jpg',
        'venue' => 'Ghitorni Farm Corridor'
    ],

    // Corporate Galas
    [
        'title' => 'Executive Leadership Summit Gala',
        'category' => 'corporate',
        'cat_name' => 'Corporate Galas',
        'image' => 'images/781251172_17981582898098216_1520487918668871307_n.jpg',
        'venue' => 'Aerocity Convention Center, New Delhi'
    ],
    [
        'title' => 'Annual Corporate Awards & Gala Night',
        'category' => 'corporate',
        'cat_name' => 'Corporate Galas',
        'image' => 'images/777915964_17981585118098216_7213760155447119263_n.jpg',
        'venue' => 'Cyber City Hub, Gurgaon'
    ],
    [
        'title' => 'Grand Product Launch & Tech Showcase',
        'category' => 'corporate',
        'cat_name' => 'Corporate Galas',
        'image' => 'images/775941856_17981585160098216_964769197695210891_n.jpg',
        'venue' => 'Pragati Maidan Hall, New Delhi'
    ]
];
?>
<div class="page-header">
    <div class="container text-center">
        <span class="section-tag"><i class="fa-solid fa-camera text-gold"></i> Visual Splendor</span>
        <h1>Past Celebrations &amp; Decor Showcase</h1>
        <p>Explore high-definition real photographs from our recent weddings, sangeet galas, and thematic setups across Delhi NCR &amp; Gurgaon.</p>
    </div>
</div>

<section class="section-padding bg-warm-ivory">
    <div class="container">
        <div class="gallery-filters text-center mb-5">
            <button class="filter-btn active" data-filter="all">All Events (<?php echo count($galleryItems); ?>)</button>
            <button class="filter-btn" data-filter="weddings">Weddings</button>
            <button class="filter-btn" data-filter="sangeet">Sangeet &amp; Cocktail</button>
            <button class="filter-btn" data-filter="haldi">Haldi &amp; Mehendi</button>
            <button class="filter-btn" data-filter="private">Anniversary &amp; Private</button>
            <button class="filter-btn" data-filter="corporate">Corporate Galas</button>
        </div>
        <div class="gallery-grid" id="galleryContainer">
            <?php foreach ($galleryItems as $item): ?>
            <div class="gallery-card" data-category="<?php echo $item['category']; ?>">
                <div class="gallery-img-wrap">
                    <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['title']); ?>" loading="lazy">
                    <div class="gallery-overlay">
                        <span class="gallery-cat-pill"><?php echo e($item['cat_name']); ?></span>
                        <h4 class="gallery-item-title"><?php echo e($item['title']); ?></h4>
                        <p class="gallery-venue"><i class="fa-solid fa-location-dot"></i> <?php echo e($item['venue']); ?></p>
                        <div class="gallery-actions">
                            <button class="btn btn-sm btn-gold open-lead-modal" data-intent="Look: <?php echo e($item['title']); ?>">Inquire This Setup</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
