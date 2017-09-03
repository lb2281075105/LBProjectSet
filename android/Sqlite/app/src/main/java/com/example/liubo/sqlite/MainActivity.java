package com.example.liubo.sqlite;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        try {
            // 创建一个数据库文件
            SliteOpenHelp sliteOpenHelp = new SliteOpenHelp(this);
//            sliteOpenHelp.getReadableDatabase(); 创建数据库文件
            sliteOpenHelp.getWritableDatabase();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
