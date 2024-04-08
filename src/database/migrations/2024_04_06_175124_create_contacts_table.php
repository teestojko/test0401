<?php
// ここら辺はインストールされたファイル
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// これはココのファイル内で処理を実行しますって意味
class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // upメソッドで実行した後に、downメソッドで削除する処理が行われる
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('gender');
            $table->string('email');
            $table->string('tell');
            $table->string('address');
            $table->string('building');
            $table->string('detail');
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
        // これが削除される処理の定義
        Schema::dropIfExists('contacts');
    }
}
