package com.example.liubo.instorage;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import java.io.BufferedWriter;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStreamWriter;

public class MainActivity extends AppCompatActivity {
    private String username;
    private String password;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void clickButton() {
        try {
            // name 就是文件名
            // mode 文件权限
            // MODE_WORLD_READABLE 任何应用都能读取
            // MODE_APPEND 比如一个文件已经有内容，再次写文件就在后面追加
            // MODE_WORLD_WRITEABLE 任何文件都能写入
            // MODE_PRIVATE 对其他文件私有化，对本应用可读可写
            FileOutputStream fileOutputStream =  openFileOutput("info.txt", MODE_WORLD_READABLE);
            BufferedWriter bufferedWriter = new BufferedWriter(new OutputStreamWriter(fileOutputStream));
            bufferedWriter.write(username + "#" + password);
            bufferedWriter.close();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
