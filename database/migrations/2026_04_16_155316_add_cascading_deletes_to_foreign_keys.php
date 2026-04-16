<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop existing foreign keys and recreate with cascading delete
        Schema::table('m_user', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
            $table->foreign('level_id')
                ->references('level_id')
                ->on('m_level')
                ->onDelete('cascade');
        });

        Schema::table('m_barang', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('m_kategori')
                ->onDelete('cascade');
        });

        Schema::table('t_penjualan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user')
                ->onDelete('cascade');
        });

        Schema::table('t_stok', function (Blueprint $table) {
            $table->dropForeign(['supplier_id']);
            $table->dropForeign(['barang_id']);
            $table->dropForeign(['user_id']);
            
            $table->foreign('supplier_id')
                ->references('supplier_id')
                ->on('m_supplier')
                ->onDelete('cascade');
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user')
                ->onDelete('cascade');
        });

        Schema::table('t_penjualan_detail', function (Blueprint $table) {
            $table->dropForeign(['penjualan_id']);
            $table->dropForeign(['barang_id']);
            
            $table->foreign('penjualan_id')
                ->references('penjualan_id')
                ->on('t_penjualan')
                ->onDelete('cascade');
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Restore foreign keys without cascading delete
        Schema::table('m_user', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
            $table->foreign('level_id')
                ->references('level_id')
                ->on('m_level');
        });

        Schema::table('m_barang', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('m_kategori');
        });

        Schema::table('t_penjualan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user');
        });

        Schema::table('t_stok', function (Blueprint $table) {
            $table->dropForeign(['supplier_id']);
            $table->dropForeign(['barang_id']);
            $table->dropForeign(['user_id']);
            
            $table->foreign('supplier_id')
                ->references('supplier_id')
                ->on('m_supplier');
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang');
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user');
        });

        Schema::table('t_penjualan_detail', function (Blueprint $table) {
            $table->dropForeign(['penjualan_id']);
            $table->dropForeign(['barang_id']);
            
            $table->foreign('penjualan_id')
                ->references('penjualan_id')
                ->on('t_penjualan');
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang');
        });
    }
};
