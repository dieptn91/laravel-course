<?php
//use namespace, namespace la noi chua cac code tu nhieu nguon khac nhau
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//ham thao tac voi csdl, tao ra 1 bang csdl
    {
        //ham tao bang user voi cac cot dl id,name..., $table dai dien bang user
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//ham thao tac vs csdl, xoa di 1 bang csdl
    {
        Schema::dropIfExists('users');
    }
}
