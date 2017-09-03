package com.example.liubo.sqlite;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

/**
 * Created by liubo on 2017/9/3.
 */

public class SliteOpenHelp extends SQLiteOpenHelper {
    private static final String DB_NAME = "sqlite.db";
    private static final int VERSION = 1;
    public SliteOpenHelp(Context context){
        super(context, DB_NAME,null,VERSION);

    }


    // 结论：当数据库文件创建时候会调用次方法，可以在这个方法里面创建数据库表了
    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        Log.e("hahah","onCreate");
        sqLiteDatabase.execSQL("");
    }
    // 升级数据库
    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
        sqLiteDatabase.execSQL("");
    }
}
