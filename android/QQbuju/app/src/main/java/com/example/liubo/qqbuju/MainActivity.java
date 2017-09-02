package com.example.liubo.qqbuju;

import android.provider.Settings;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class MainActivity extends AppCompatActivity {

    //全局变量
    private EditText editText1;
    private EditText editText2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        editText1 = (EditText) findViewById(R.id.editText1);
        editText2 = (EditText) findViewById(R.id.editText2);

        Button button = (Button) findViewById(R.id.button1);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // Toast.makeText(MainActivity.this,editText1.getText().toString() + editText2.getText().toString(),0).show();

                if (TextUtils.isEmpty(editText1.getText().toString()) || TextUtils.isEmpty(editText2.getText().toString())) {
                    Toast.makeText(MainActivity.this, "请填写完整的用户信息", 0).show();
                    return;
                }
                // 保存登录信息到手机里面,把账号#密码写到文件里面去
                saveInfo(editText1.getText().toString(), editText2.getText().toString());

            }

            public void saveInfo(String username, String password) {


                try {
                    // 注意：清除缓存时，把cache里面的文件给清除掉；清除数据时，只留下libs文件夹，其他文件(cahce,files)都清除掉；
//                    File file = new File("/data/data/com.example.qqbuju/info.txt");
                    // 缓存目录
//                    File file = new File(getCacheDir(),"/info.txt");
                    // 放在文件夹下
                    File file = new File(getFilesDir(),"/info.txt");
                    BufferedWriter bufferedWriter = new BufferedWriter(new FileWriter(file));
                    bufferedWriter.write(username + "#" + password);
                    bufferedWriter.close();
                } catch (IOException io) {
                    io.printStackTrace();
                }


            }
        });
        // 读取数据
        readData();
    }

    public void readData() {
        try {
            // 把文件保存在
//            File file = new File("/data/data/com.example.qqbuju/info.txt");
            // 缓存目录
//            File file = new File(getCacheDir(),"/info.txt");
            // 放在文件夹离
            File file = new File(getFilesDir(),"/info.txt");
            // 判断文件是否存在
            if (file.exists() && file.length() > 0) {
                BufferedReader bufferedReader = new BufferedReader(new FileReader(file));
                String string = bufferedReader.readLine();
                // 判断是否存在"#"
                if (string.contains("#")){
                    String[] info = string.split("#");
                    editText1.setText(info[0]);
                    editText2.setText(info[1]);
                    bufferedReader.close();
                }

            }

        } catch (IOException io) {
            io.printStackTrace();
        }
    }
}
