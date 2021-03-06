<?php
 
use Illuminate\Database\Seeder;
 
class DatasetSubcategoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('dataset_subcategories')->delete();
		
		//reset autoincrement
		$statement = "ALTER TABLE dataset_subcategories AUTO_INCREMENT = 1;";
		DB::unprepared($statement);
		
		$dataset_subcategories = array(
			
			[ 'name' => 'World Population Growth', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Future World Population Growth', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Fertility Rates', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Age Structure and Mortality by Age', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Child Mortality', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Infant Mortality', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Life Expectancy', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Gender Ratio', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'The Distribution of World Population', 'fk_dst_cat_id' => 1 ],
			[ 'name' => 'Demographic Transition & Population Growth', 'fk_dst_cat_id' => 1 ],

			[ 'name' => 'Eradication of Diseases', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Health Inequality', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'HIV / AIDS', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Malaria', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Maternal Mortality', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Smoking', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Suicides', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Vaccination', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Cancer', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Epidemics', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Doctors & Health Workers', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Health Insurance & Spending', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Hygiene', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Causes of Death', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Burden of Disease', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Neglected Tropical Diseases', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Non-communicable Diseases', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Cardiovascular Diseases', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Disabilities & Chronic Diseases', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Tuberculosis', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Medical Research & Innovation', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Antibiotics', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Blood and Organ Donation', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Toxins', 'fk_dst_cat_id' => 2 ],
			[ 'name' => 'Mental Health', 'fk_dst_cat_id' => 2 ],
			
			[ 'name' => 'Food per Person', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Hunger & Undernourishment', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Famines', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Human Height', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Agricultural Employment', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Land Use in Agriculture', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Yields', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Fertilizer and Pesticides', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Food Prices', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Volatility of Food Prices', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Agricultural Output & Food Availability', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Productivity in Agriculture', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Improved Seeds & GMOs', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Farms & Agricultural Machinery', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Irrigation', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Soil Loss & Soil Quality', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Irrigation of Land', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Soil Loss & Soil Quality', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Food Trade', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Agricultural Transition', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Food Origins', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Food Expenditure', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Diet Composition', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Agricultural Regulation', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Food Stocks', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Food Waste', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Obesity & BMI', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Impact of Climate Change on Food Supply', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Alcohol Consumption', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Marijuana & Other Drugs', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Productivity per Animal', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Meat Consumption & Livestock Counts', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Vegetarianism', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Seafood', 'fk_dst_cat_id' => 3 ],
			[ 'name' => 'Non-food Crops', 'fk_dst_cat_id' => 3 ],
			
			[ 'name' => 'CO2 and Greenhouse Gas Emissions', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Energy Production & Changing Energy Sources', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Energy Consumption', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Energy Efficiency', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Emission Intensity', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Electricity', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Energy Prices', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Energy Trade', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Safety of Different Energy Sources', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Nuclear Energy', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Renewable Energy', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Fossil Fuels', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Primary Good Economies & Resource Curse', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Resource Trade', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Oil Price, Taxes, Production & Consumption', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Non-Energy Resources', 'fk_dst_cat_id' => 4 ],
			[ 'name' => 'Diamonds', 'fk_dst_cat_id' => 4 ],
			
			[ 'name' => 'Forest Cover', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Indoor Air Pollution', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Land Cover', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Natural Catastrophes', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Oil Spills', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Climate Change', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Environmental Protection Efforts', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Public Opinion about Environment', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Natural Reserves & Parks', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Environment and Growth', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Environment and Institutions', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Biodiversity', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Extinction & Recovery of Animals', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Environment and Health', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Water Accessibility, Consumption & Sanitation', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Water Quality in Rivers and Oceans', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Acid Rain', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Ozone Layer', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Air Pollution', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Waste', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Past Climate Issues', 'fk_dst_cat_id' => 5 ],
			[ 'name' => 'Carbon Stocks', 'fk_dst_cat_id' => 5 ],
			
			[ 'name' => 'R&D, Engineers & Scientists', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Technological Progress', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Transportation Infrastructure', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Price and Speed of Transportation', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Space Travel & Satellites', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Patents & Innovation', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Quality of Technology', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Risk of Accidents', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Poison from Products', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Risk of Fire', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Chemicals Management & Catastrophes', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Dams & Reservoirs', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Technological Disasters', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Ancient Transport Infrastructure', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Vehicles, Public Transport & Street Lights', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Risk of Accidents in Transportation', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Goods Transportation', 'fk_dst_cat_id' => 6 ],
			[ 'name' => 'Energy Demand for Transportation', 'fk_dst_cat_id' => 6 ],
			
			[ 'name' => 'Incomes across the Income Distribution', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'World Poverty', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'GDP Growth Over the Last Centuries', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'GDP Growth over the Very Long Run', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Economic Convergence between Countries', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Inequality between World Citizens', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'GDP Data', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Income Inequality', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Economic Prosperity', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Predictions of Global Growth', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Wages & Other Measures of Income', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Price Data', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Inflation', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Economic Inequality', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Consumption Inequality', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Inequality of Wealth', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Income Mobility & Social Mobility', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Relative Poverty', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Minimum Wage', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Economic Gender & Race Differences', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Poverty in Individual Countries', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Middle Class', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Factor Incomes', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Finance & Stocks', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Banks & Financial Institutions', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Finance & Business Education', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Business Cycles, Crises & Recessions', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Financial Stability', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Interest Rates & Credit Market', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Corporate Profits', 'fk_dst_cat_id' => 7 ],
			[ 'name' => 'Consumer Credit, Debt & Saving', 'fk_dst_cat_id' => 7 ],

			[ 'name' => 'Happiness and Life Satisfaction', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Human Development Index (HDI)', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Light', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Trends in Africa', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Working Hours', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Slavery', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Productivity of Technologies', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Efficiency and Growth', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Industrialization & Technological Progress', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Capital Formation & Investment', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Capital per Worker', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Multidimensional Poverty', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Quality of Life & Standard of Living', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Global Convergence of Quality of Life', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Consumption Basket', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Goods', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Urbanization', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Quality of Life in Urban and Rural Areas', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Housing', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'House Size', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Toilets', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Homelessness', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Working Time over Life', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Job Satisfaction', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Work Conditions & Safety', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Workers’ Unions', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Workers Rights', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Child Labor', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Risk', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Strikes & Industrial Disputes', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Servants', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Forced Labor', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Unofficial Economy', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Labor Force Participation', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Start-Ups & Entrepreneurialism', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Unemployment', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Labor Market Policy', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Unpaid Work', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Non-Profit Sector', 'fk_dst_cat_id' => 8 ],
			[ 'name' => 'Corruption', 'fk_dst_cat_id' => 8 ],
			
			[ 'name' => 'Social Spending', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Public Sector Employment', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Government Revenue', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Composition of Tax Revenues', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Corporate Tax', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Other Taxes', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Income Tax & Redistribution', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Public Spending', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Monetary Policy', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Pension System & Incomes of the Elderly', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Public Debt & Government Bonds', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Views on Capitalism', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Economic Systems', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Competition', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Economic Freedom & Regulation', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Business Environment', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Property Rights', 'fk_dst_cat_id' => 9 ],
			[ 'name' => 'Intellectual Property', 'fk_dst_cat_id' => 9 ],
			
			[ 'name' => 'International Trade', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Tariffs, Financial Liberalization & Trade Barriers', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Economic Openness', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Balance of Payment, Current Account and Capital Account', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Foreign Direct Investment & Capital Flows', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Trade from Antiquity to Early Modern Times', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Trade from the Recent Past to Present', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Trade Composition', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Economic Unions & Trade Agreements', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'State Unions', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Intergovernmental Organizations & Diplomacy', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Terms of Trade', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Foreign Aid', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Trends for the Bottom Billion', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Traveling & Tourism', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Remittances', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Migration', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Public Opinion on Immigration', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Domestic Migration', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Education & Migration', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Human Trafficking', 'fk_dst_cat_id' => 10 ],
			[ 'name' => 'Political Asylum & Refugees', 'fk_dst_cat_id' => 10 ],

			[ 'name' => 'Civil Wars', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Genocides', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Military Spending', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Nuclear Weapons', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Peacekeeping', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Terrorism', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'War and Peace before 1945', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'War and Peace after 1945', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Correlates & Drivers of Peace', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Military Personnel', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Fortifications of Settlements', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Wars in Non-State Societies', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Arms Producers, Trade & Non-Proliferation', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Landmines and Other Weapons', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Consequences of Conflict', 'fk_dst_cat_id' => 11 ],
			[ 'name' => 'Costs of Wars', 'fk_dst_cat_id' => 11 ],
			
			[ 'name' => 'Democratisation', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Accountability & Transparency', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'State Violence – Judicial Torture & Capital Punishment', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Political Regimes in the Long Run', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Political Rights', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Citizenship', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Democratic Values of the People', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Trust in Political Regime & Institutions', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Franchise, Voting Rights & Electoral Systems', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Voter Turnout', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Political Engagement & Protest', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Separation of State and Religion', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Political Stability & Coups', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Violence against the Political System', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Gender Differences in Politics', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Protests', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Rule of Law', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Colonialism & Imperialism', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Prisons & Police', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Privacy & Surveillance', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Political Fragmentation, Segregation & Centralization', 'fk_dst_cat_id' => 12 ],
			[ 'name' => 'Freedom of Press & Speech', 'fk_dst_cat_id' => 12 ],

			[ 'name' => 'Cascade of Rights', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Ethnographic and Archaeological Evidence on Violent Deaths', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Homicides', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Treatment of Minorities – Violence and Tolerance', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Quality of Institutions', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Women’s Rights and Violence against Women', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Guns', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Crime & Violence', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Human Rights', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Religious Violence & Tolerance', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Genital Mutilation', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Female Infanticide & Gender Ratios', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Violence against & Rights for Children', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Violence against & Rights for LGBTQ People', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Violence against & Rights for Animals', 'fk_dst_cat_id' => 13 ],
			[ 'name' => 'Treatment of the Elderly', 'fk_dst_cat_id' => 13 ],
			
			[ 'name' => 'Financing of Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Global Rise of Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Higher Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Intelligence', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'International Research Community', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Primary Education and Schools', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Projections of Future Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Quality of Education & Drop-Out Rates', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Skill Premium – Income by Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Literacy', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Secondary Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Numeracy', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Pre-Primary Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Lifelong Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Teachers & Professors', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Education Mobility', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Time Spent studying', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Inequality of Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Internationalizing Education', 'fk_dst_cat_id' => 14 ],
			[ 'name' => 'Open Data', 'fk_dst_cat_id' => 14 ],

			[ 'name' => 'Books', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Internet', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Social Media', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Cultural Institutions', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'News & Public Media', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Reporting of the Media', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Radio, TV & Movies', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Music', 'fk_dst_cat_id' => 15 ],
			[ 'name' => 'Communication Technology & Mobile Phone', 'fk_dst_cat_id' => 15 ],
			
			[ 'name' => 'Materialism and Post-Materialism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Optimism & Pessimism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Trust', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Marriage & Relationships', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Teenage Pregnancy & Marriage', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Self Expression & Secular Rationalism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Life Goals', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Live Values', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Demand for Rights & Liberty', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Freedom vs Egality', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Rational Orientation', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Individualism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'We-Feeling, Nationalism & Cosmopolitanism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Emotionalism vs Stoicism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Individualism vs Collectivism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Egalitarianism vs Elitism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Value Determinants', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Views on Tradition and Modernization', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Quantitative View of the World', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Conservatism vs Liberalism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Long-Term Determinants of Values', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Variety', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Fashion & Style', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Beauty', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Art', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Cultural Contact & Transferring', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'World Languages', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Foreign Language Skills', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Sports', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Religion', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Atheism', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Contraception & Abortion', 'fk_dst_cat_id' => 16 ],
			[ 'name' => 'Sex', 'fk_dst_cat_id' => 16 ],
			
			[ 'name' => 'Geographic', 'fk_dst_cat_id' => 17 ],

		);
		
		// Uncomment the below to run the seeder
		DB::table('dataset_subcategories')->insert($dataset_subcategories);
	}

}

?>