<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sname')->comment('student name');
            $table->string('sfname')->comment('student father name');
            $table->string('smname')->comment('student mother name');
           


            $table->string('dept')->nullable()->comment('chosend dept name');
            $table->string('program')->nullable()->comment('which program want to admit');
            $table->string('hall_name')->nullable()->comment('chose hall name');
            $table->string('reg_number')->comment('registration number');
            $table->string('roll_number')->comment('registration number');
            $table->string('session')->nullable()->comment('session number');
            $table->string('admission_roll')->comment('admission roll ');
            $table->string('gender')->comment('student gender  ');
            $table->string('faculty')->comment('student faculty  ');
            $table->string('m_position')->comment('student admission merit position ');
            $table->string('student_mobile')->comment('student Student mobile numebr');
            $table->string('student_email')->comment('student email numebr');

            //SSC information
            $table->string('sboard_name');
            $table->string('school_name');
            $table->string('spass_year');
            $table->string('sroll_no');
            $table->string('sreg_no')->unique();
            $table->string('sgroup');
            $table->string('sgpa');
               //HSC information 
            $table->string('hboard_name');
            $table->string('hchool_name');
            $table->string('hpass_year');
            $table->string('hroll_no');
            $table->string('hreg_no');
            $table->string('hgroup');
            $table->string('hgpa'); 
              //under gradute admission 
            $table->string('university_name')->nullable()->comment('unversity name');
            $table->string('institue_name')->nullable()->comment('Instition name');
            $table->string('ugpass_year')->nullable()->comment('under graduation passing year');
            $table->string('ugroll_no')->nullable()->comment('under graduation roll number');
            $table->string('ureg_no')->nullable()->comment('under graduation register number');
            $table->string('subject')->nullable()->comment('under graduation subject');
            $table->string('ugpa')->nullable()->comment('under Graduation CGPA');
            
            $table->string('par_address')->nullable()->comment('Parmanent address');
            $table->string('pre_address')->nullable()->comment('Present address address');
            $table->string('mobile')->nullable()->comment('Student Mobile number');
            $table->string('gardian_name')->nullable()->comment('Gardian name');
            $table->string('gardian_mobile')->nullable()->comment('Gardian  Mobile number');
            $table->string('gardian_address')->nullable()->comment('Gardian address');
            $table->string('gardian_relationship')->nullable()->comment('Gardian relationship with student');
            $table->string('gardian_income')->nullable()->comment('Gardian income');
            
            $table->string('local_gardian')->nullable()->comment('Local Gardian name');
            $table->string('local_gardian_relationship')->nullable()->comment('Local gardian relationship');

            $table->string('nationality')->default('Bangladeshi')->comment('Nationality');
            $table->string('payment')->default(0);
            $table->string('religion')->nullable()->comment('Religion');
            $table->string('community')->nullable()->comment('Chose community');
            $table->string('age')->nullable()->comment('Student Age');
            $table->string('bday')->nullable()->comment('Student Brithday ');
            $table->string('scholorship')->nullable()->comment('if student got scholorship -13 ');
            $table->string('admissin_date')->nullable()->comment('admission date ');
            $table->string('signature')->nullable()->comment('Chosen student Signature ');
            $table->string('images')->default('default.png')->comment('Chosen Student images ');
            $table->string('enroll_any')->nullable()->comment('If student enroll any dept 8 ');
            $table->string('student_pro')->nullable()->comment('If student have any profession 9 ');
            $table->string('smar_unmr')->nullable()->comment('Student marriend or unmarried 11 ');
            $table->string('s_gap')->nullable()->comment('study gap 7');
            $table->string('f_profession')->nullable()->comment('Father Profession');
            $table->string('f_income')->nullable()->comment('Father Income');
            $table->string('student_password');
            $table->boolean('status')->default(1);
            $table->string('village')->comment('Name of Student Village');
            $table->string('postoffice')->comment('Name of Student Post Office');
            $table->string('police_station')->comment('Name of Student Police Station');
            $table->string('room')->nullable()->comment('Hall Room');
            $table->string('verify')->default(0);
            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrations');
    }
}
