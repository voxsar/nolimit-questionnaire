<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Choice;
use App\Models\Question;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Quiz::insert([
    		[
    			'name' => 'Department',
    			'group' => 'GRP1',
    			'purpose' => "<p><b>The Purpose of this Performance Appraisal: </b></p><ul><li>Motivate Employee for performance improvement. </li><li>Measure the effectiveness of employee’s competency comparing with the requirement.</li><li>Inform employee about performance management’s principle and development program.</li><li>Implement the fairness principle in evaluating employee’s level of working attainment and effectiveness of competency through open, transparency, two way, interactive communication between employee and direct supervisor.</li><li>Implement active participation of employee and direct supervisor for the evaluation as follows;</li><li>Direct Supervisor: Build and create good atmosphere for motivation enhancement, competency development and performance improvement.</li><li>Employee: Communicate aspiration, self-potentials development, and opportunity to improve performance and competency level. </li></ul>",
    			'instructions' => "<p><b>Instructions:</b></p><ol><li>Place an 'X' in the box under the Rating Scale that most states your evaluation of each stated components.</li><li>Consider the individual's entire performance throughout the year. Don't base your judgment on one or two incidents.</li><li>Space is provided on the last page for comments and explanations.</li></ol>",
    		]
    	]);

        Choice::insert([
            [
                'choice' => 'Exceptional',
                'rating_value' => '5',
                'section' => 'Section 01: Managerial Aspects',
                'definition' => 'The employee consistently exceeds job requirements. Exceptional in all aspects of the stated components. Extraordinary accomplishment or achievement.Outstanding work.',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Highly Effective',
                'rating_value' => '4',
                'section' => 'Section 01: Managerial Aspects',
                'definition' => 'The employee is highly capable and frequently exceeds expectations in one or more aspects of the stated components. Demonstrates above average ability and initiative.',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Proficient',
                'rating_value' => '3',
                'section' => 'Section 01: Managerial Aspects',
                'definition' => '',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Need Improvement',
                'rating_value' => '2',
                'section' => 'Section 01: Managerial Aspects',
                'definition' => 'Performance meets some, but not all requirements of the stated components and Job accomplishments fall short of expectations. Improvement is necessary.',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Unsatisfactory',
                'rating_value' => '1',
                'section' => 'Section 01: Managerial Aspects',
                'definition' => 'Performance does not meet most aspects of the stated components, also fails to demonstrate sufficient ability and requires regular and ongoing attention. Immediate improvement is required.',
                'quiz_id' => '2'
            ],


            [
                'choice' => 'Exceptional',
                'rating_value' => '5',
                'section' => 'Section 02: Behavioral Skills',
                'definition' => 'The employee consistently exceeds job requirements. Exceptional in all aspects of the stated components. Extraordinary accomplishment or achievement.Outstanding work.',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Highly Effective',
                'rating_value' => '4',
                'section' => 'Section 02: Behavioral Skills',
                'definition' => 'The employee is highly capable and frequently exceeds expectations in one or more aspects of the stated components. Demonstrates above average ability and initiative.',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Proficient',
                'rating_value' => '3',
                'section' => 'Section 02: Behavioral Skills',
                'definition' => '',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Need Improvement',
                'rating_value' => '2',
                'section' => 'Section 02: Behavioral Skills',
                'definition' => 'Performance meets some, but not all requirements of the stated components and Job accomplishments fall short of expectations. Improvement is necessary.',
                'quiz_id' => '2'
            ],
            [
                'choice' => 'Unsatisfactory',
                'rating_value' => '1',
                'section' => 'Section 02: Behavioral Skills',
                'definition' => 'Performance does not meet most aspects of the stated components, also fails to demonstrate sufficient ability and requires regular and ongoing attention. Immediate improvement is required.',
                'quiz_id' => '2'
            ],
        ]);

        Question::insert([
        	[
        		'question' => 'Displays in-depth understanding of job',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Has sufficient knowledge of processes and policies of business operations to make informed decisions within the scope of responsibility',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Keeps up to date with best practices and new developments',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Uses and share the job knowledge to mentor other employees',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Exhibits ability to learn and apply new skills related to the job',
        		'category' => 'Job Knowledge',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],


        	[
        		'question' => 'Exhibits ability to learn and apply new skills related to the job',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Takes initiative to inquire about customer needs, feedback and opinions',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Encourages and develops customer service skills in employees',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Actively involved in sales related activities',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Effectively handles and responds to customer requests and complaints',
        		'category' => 'Customer Service And Sales',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Motivates others; creates enthusiasm for team effort',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Sets a model for teamwork that encourages common goals',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Is an effective team builder promoting strong working relationships',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Interacts effectively with supervisor',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Sets a positive example for the team',
        		'category' => 'Communication',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Motivates others; creates enthusiasm for team effort',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Sets a model for teamwork that encourages common goals',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Is an effective team builder promoting strong working relationships',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Interacts effectively with supervisor',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Sets a positive example for the team',
        		'category' => 'Cooperation/Teamwork',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Gathers and analyzes information skillfully',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Able to prioritize work. Sets realistic deadlines for self and ensures deadlines are met',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Open to new ideas, allows and supports employees to make decisions',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Integrates changes smoothly',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Works well in group problem-solving situations',
        		'category' => 'Planning, Problem Solving & Organizing',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Positive attitude with colleagues and supervisors',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Adhering to organization policies, rules and regulations',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Good attendance & punctuality / unplanned leave & frequent absence',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Adherence to dress code and attire ',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Applies negotiation skills to gain support for even the most controversial issues',
        		'category' => 'Attitude and Discipline',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Work is accurate and precise.',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Strives to increase productivity.',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Displays original thinking, innovative approaches and ideas creativity',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Applies feedback to improve performance',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Looks for ways to improve and promote quality of work',
        		'category' => 'Performance and Productivity',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Displays in-depth understanding of product features, trends and usages',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Ability to identify the product and market gaps',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Control damage products and maintain up to date inventory',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Sets effective control on inventory & stock levels',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Assuring the availability of all basic products ',
        		'category' => 'Product Knowledge and Inventory Control',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Self-Motivated in Completing Assignments',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Makes Suggestions to Improve Performance or Productivity.',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Seeks out New Assignments and Assumes Additional Duties as needed',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Takes Independent Actions and Calculated Risks',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Undertakes Self-Development Activities',
        		'category' => 'Ownership & Initiative',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],

        	[
        		'question' => 'Reliable in Completing Assigned Tasks',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Follows Instructions; Stays on Task Without Constant Supervision',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Ability to Handle Multiple Demands Or Multi-Task',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
        	[
        		'question' => 'Takes responsibility for own actions',
        		'category' => 'Dependability',
        		'section' => 'Section 01: Managerial Aspects',
        		'type' => '1',
        		'quiz_id' => '2',
        	],
            [
                'question' => 'Commitment Towards Doing Best Job Possible',
                'category' => 'Dependability',
                'section' => 'Section 01: Managerial Aspects',
                'type' => '1',
                'quiz_id' => '2',
            ],

            [
                'question' => 'Resistance To Pressure',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Flexibility & Change Agent',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Innovative & Creative',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Professional Development',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Results Oriented',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Personal Development',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Passionate',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Influencer',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Empathy',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
            [
                'question' => 'Self Esteem',
                'category' => 'N/A',
                'section' => 'Section 02: Behavioral Skills',
                'type' => '1',
                'quiz_id' => '2',
            ],
        ]);
    }
}
