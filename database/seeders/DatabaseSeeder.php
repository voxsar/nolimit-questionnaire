<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

    	Quiz::insert([
    		[
    			'name' => 'Showroom EPA',
    			'purpose' => 's',
    			'instructions' => 's',
    		]
    	]);

        Choice::insert([
            [
                'choice' => 'Exceptional',
                'rating_value' => '5',
                'section' => 'Section 01: Managerial Aspects',
                'quiz_id' => '1'
            ],
            [
                'choice' => 'Highly Effective',
                'rating_value' => '4',
                'section' => 'Section 01: Managerial Aspects',
                'quiz_id' => '1'
            ],
            [
                'choice' => 'Need Improvement',
                'rating_value' => '2',
                'section' => 'Section 01: Managerial Aspects',
                'quiz_id' => '1'
            ],
            [
                'choice' => 'Unsatisfactory',
                'rating_value' => '1',
                'section' => 'Section 01: Managerial Aspects',
                'quiz_id' => '1'
            ],


            [
                'choice' => 'Exceptional',
                'rating_value' => '5',
                'section' => 'Section 02: Behavioral Skills',
                'quiz_id' => '1'
            ],
            [
                'choice' => 'Highly Effective',
                'rating_value' => '4',
                'section' => 'Section 02: Behavioral Skills',
                'quiz_id' => '1'
            ],
            [
                'choice' => 'Need Improvement',
                'rating_value' => '2',
                'section' => 'Section 02: Behavioral Skills',
                'quiz_id' => '1'
            ],
            [
                'choice' => 'Unsatisfactory',
                'rating_value' => '1',
                'section' => 'Section 02: Behavioral Skills',
                'quiz_id' => '1'
            ],
        ]);

        Question::insert([
        	[
        		'question' => 'Displays in-depth understanding of job',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Has sufficient knowledge of processes and policies of business operations to make informed decisions within the scope of responsibility',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Keeps up to date with best practices and new developments',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Uses and share the job knowledge to mentor other employees',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Exhibits ability to learn and apply new skills related to the job',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],


        	[
        		'question' => 'Exhibits ability to learn and apply new skills related to the job',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Takes initiative to inquire about customer needs, feedback and opinions',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Encourages and develops customer service skills in employees',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Actively involved in sales related activities',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Effectively handles and responds to customer requests and complaints',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Motivates others; creates enthusiasm for team effort',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Sets a model for teamwork that encourages common goals',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Is an effective team builder promoting strong working relationships',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Interacts effectively with supervisor',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Sets a positive example for the team',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Motivates others; creates enthusiasm for team effort',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Sets a model for teamwork that encourages common goals',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Is an effective team builder promoting strong working relationships',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Interacts effectively with supervisor',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Sets a positive example for the team',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Sets a positive example for the team',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Gathers and analyzes information skillfully',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Able to prioritize work. Sets realistic deadlines for self and ensures deadlines are met',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Open to new ideas, allows and supports employees to make decisions',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Integrates changes smoothly',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Works well in group problem-solving situations',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Positive attitude with colleagues and supervisors',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Adhering to organization policies, rules and regulations',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Good attendance & punctuality / unplanned leave & frequent absence',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Adherence to dress code and attire ',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Applies negotiation skills to gain support for even the most controversial issues',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Work is accurate and precise.',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Strives to increase productivity.',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Displays original thinking, innovative approaches and ideas creativity',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Applies feedback to improve performance',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Looks for ways to improve and promote quality of work',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Displays in-depth understanding of product features, trends and usages',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Ability to identify the product and market gaps',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Control damage products and maintain up to date inventory',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Sets effective control on inventory & stock levels',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Assuring the availability of all basic products ',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Self-Motivated in Completing Assignments',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Makes Suggestions to Improve Performance or Productivity.',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Seeks out New Assignments and Assumes Additional Duties as needed',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Takes Independent Actions and Calculated Risks',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Undertakes Self-Development Activities',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],

        	[
        		'question' => 'Reliable in Completing Assigned Tasks',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Follows Instructions; Stays on Task Without Constant Supervision',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Ability to Handle Multiple Demands Or Multi-Task',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
        	[
        		'question' => 'Takes responsibility for own actions',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '1',
        	],
            [
                'question' => 'Commitment Towards Doing Best Job Possible',
                'category' => 'Dependability',
                'section' => 'Section 01: Managerial Aspects',
                'type' => '1',
                'quiz_id' => '1',
            ],

            [
                'question' => 'Resistance To Pressure',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Flexibility & Change Agent',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Innovative & Creative',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Professional Development',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Results Oriented',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Personal Development',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Passionate',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Influencer',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Empathy',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
            [
                'question' => 'Self Esteem',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '1',
            ],
        ]);

        /*

        */
    }
}
