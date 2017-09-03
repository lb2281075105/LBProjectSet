package com.example.liubo.sdreaderwrite;

import android.os.Environment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }

    public void clickButton(View view) {
        System.out.print("hahahahah");
        try {

            String state = Environment.getExternalStorageState();
            // 判断外部存储是否插入（插拔式的）
            if (state.equals(Environment.MEDIA_MOUNTED)) {
                // 把1024*1024文件存储到SD卡里面
                // 获取外部存储路径
                File filePath = Environment.getExternalStorageDirectory();
                // 创建文件路径
                File file = new File(filePath, "葫芦娃.avi");
                // Log.e("文件路径",file.toString());
                // 字节流（只能以字节流存入）
                FileOutputStream fileOutputStream = new FileOutputStream(file);
                byte[] bytes = new byte[1024 * 1024];
                for (int i = 0; i < 10; i++) {

                    fileOutputStream.write(bytes);
                }
                // 关闭 // 存储到外部需要 在AndroidManifest.xml用户允许
                fileOutputStream.close();
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
