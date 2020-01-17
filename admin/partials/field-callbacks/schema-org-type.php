<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    AF_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AF_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'af-plugin' ),
	'Airline'     => __( 'Airline', 'af-plugin' ),
	'Corporation' => __( 'Corporation', 'af-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'af-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'af-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'af-plugin' ),
		'HighSchool'          => __( '— High School', 'af-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'af-plugin' ),
		'Preschool'           => __( '— Preschool', 'af-plugin' ),
		'School'              => __( '— School', 'af-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'af-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'af-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'af-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'af-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'af-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'af-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'af-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'af-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'af-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'af-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'af-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'af-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'af-plugin' ),

		'ChildCare'            => __( '— Child Care', 'af-plugin' ),
		'Dentist'              => __( '— Dentist', 'af-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'af-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'af-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'af-plugin' ),
			'Hospital'      => __( '—— Hospital', 'af-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'af-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'af-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'af-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'af-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'af-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'af-plugin' ),
			'Casino'             => __( '—— Casino', 'af-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'af-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'af-plugin' ),
			'NightClub'          => __( '—— Night Club', 'af-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'af-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'af-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'af-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'af-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'af-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'af-plugin' ),
			'Bakery'             => __( '—— Bakery', 'af-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'af-plugin' ),
			'Brewery'            => __( '—— Brewery', 'af-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'af-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'af-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'af-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'af-plugin' ),
			'Winery'             => __( '—— Winery', 'af-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'af-plugin' ),
			'PostOffice' => __( '—— Post Office', 'af-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'af-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'af-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'af-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'af-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'af-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'af-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'af-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'af-plugin' ),
			'Electrician'       => __( '—— Electrician', 'af-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'af-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'af-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'af-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'af-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'af-plugin' ),
			'Plumber'           => __( '—— Plumber', 'af-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'af-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'af-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'af-plugin' ),
			'Attorney' => __( '—— Attorney', 'af-plugin' ),
			'Notary'   => __( '—— Notary', 'af-plugin' ),

		'Library' => __( '— Library', 'af-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'af-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'af-plugin' ),
			'Campground'      => __( '—— Campground', 'af-plugin' ),
			'Hostel'          => __( '—— Hostel', 'af-plugin' ),
			'Hotel'           => __( '—— Hotel', 'af-plugin' ),
			'Motel'           => __( '—— Motel', 'af-plugin' ),
			'Resort'          => __( '—— Resort', 'af-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'af-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'af-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'af-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'af-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'af-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'af-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'af-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'af-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'af-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'af-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'af-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'af-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'af-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'af-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'af-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'af-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'af-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'af-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'af-plugin' ),
			'BookStore'           => __( '—— Book Store', 'af-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'af-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'af-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'af-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'af-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'af-plugin' ),
			'Florist'             => __( '—— Florist', 'af-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'af-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'af-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'af-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'af-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'af-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'af-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'af-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'af-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'af-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'af-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'af-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'af-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'af-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'af-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'af-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'af-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'af-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'af-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'af-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'af-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'af-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'af-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'af-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'af-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'af-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'af-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'af-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'af-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'af-plugin' ) )
);
$html .= '</p>';

echo $html;