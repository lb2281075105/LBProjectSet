package com.example.liubo.keyvaluestorage;

import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    // 文件存储和键值存储
    private EditText username;
    private EditText password;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        username = (EditText) findViewById(R.id.edit1);
        password = (EditText) findViewById(R.id.edit2);
        Button button = (Button)findViewById(R.id.clcikButton);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // 保存信息
                SharedPreferences sharedPreferences = getSharedPreferences("info.txt", MODE_PRIVATE);
                SharedPreferences.Editor editor = sharedPreferences.edit();
                editor.putString("username", username.getText().toString());
                editor.putString("password", password.getText().toString());
                editor.commit();

            }
        });
        // 获取信息
        putInfo();
    }
    // 获取信息
    public void putInfo() {
        SharedPreferences sharedPreferences = getSharedPreferences("info.txt", MODE_PRIVATE);
        String un = sharedPreferences.getString("username", "");
        String pwd = sharedPreferences.getString("password", "");
        username.setText(un);
        password.setText(pwd);
    }

}
