<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}
$name = trim($_POST['name'] ?? $_POST['client_name'] ?? 'Guest');
$phone = trim($_POST['phone'] ?? $_POST['client_phone'] ?? $_POST['calc_phone'] ?? '');
$eventType = trim($_POST['event_type'] ?? $_POST['calc_type'] ?? 'Wedding');
$eventDate = trim($_POST['event_date'] ?? 'Tentative');
$venueCity = trim($_POST['venue_city'] ?? $_POST['venue_details'] ?? 'Ghitorni/Gurgaon');
$guestCount = trim($_POST['guest_count'] ?? '350');
$budget = trim($_POST['budget_range'] ?? 'Standard');
$notes = trim($_POST['notes'] ?? '');
$leadType = trim($_POST['lead_type'] ?? 'Website Inquiry');

if (empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid phone/WhatsApp number.']);
    exit;
}
if (!is_dir(DATA_DIR)) { mkdir(DATA_DIR, 0755, true); }
$leads = [];
if (file_exists(LEADS_FILE)) {
    $leads = json_decode(file_get_contents(LEADS_FILE), true) ?: [];
}
$newLead = [
    'id' => uniqid('lead_'),
    'name' => $name,
    'phone' => $phone,
    'event_type' => $eventType,
    'event_date' => $eventDate,
    'venue_city' => $venueCity,
    'guest_count' => $guestCount,
    'budget' => $budget,
    'notes' => $notes,
    'lead_type' => $leadType,
    'created_at' => date('Y-m-d H:i:s')
];
array_unshift($leads, $newLead);
file_put_contents(LEADS_FILE, json_encode($leads, JSON_PRETTY_PRINT));
echo json_encode(['success' => true, 'message' => 'Inquiry received! We will WhatsApp you within 15 minutes.']);
?>
