package com.example.liubo.xmlstorage;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import java.io.IOException;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }
    public void xmlClickStorage(View v){
        String uasername = "zhangsan";
        String pwd = "1234";
        Xml.xmlStorage(this,uasername,pwd);

        try{
            XmlSeri.saveXmlByxmlFiles(this,uasername,pwd);
        }catch (Exception e){
            e.printStackTrace();
        }
    }
}
