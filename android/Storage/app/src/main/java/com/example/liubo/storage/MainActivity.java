package com.example.liubo.storage;

import android.os.Environment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;

import java.io.File;

public class MainActivity extends AppCompatActivity {
   // 内部存储和外部存储
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        // 内部存储 : /data
        File environment = Environment.getDataDirectory();
        Log.v("android",environment.getAbsolutePath());
        // 外部存储 : /storage/emulated/0(外部存储俗称sd卡)
        File dataFile = Environment.getExternalStorageDirectory();
        Log.v("adnroid",dataFile.getAbsolutePath());
        // Log.e("android","hahahah");
    }
}
