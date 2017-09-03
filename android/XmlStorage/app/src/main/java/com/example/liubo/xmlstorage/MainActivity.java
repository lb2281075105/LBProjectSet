package com.example.liubo.xmlstorage;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

import java.io.IOException;

public class MainActivity extends AppCompatActivity {

    private String uasername;
    private String pwd;
    private EditText editText;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        uasername = "zhangsan";
        pwd = "1234";
        editText = (EditText) findViewById(R.id.edit);
    }

    public void xmlClickStorage(View v) {

        // Xml.xmlStorage(this,uasername,pwd);

        try {
            XmlSeri.saveXmlByxmlFiles(this, uasername, pwd);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public void xmlClickParse(View view) {
        try {

            String string = XmlParse.xmlParseFile(this);
            editText.setText(string);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
