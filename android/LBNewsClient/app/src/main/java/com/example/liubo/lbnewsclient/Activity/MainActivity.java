package com.example.liubo.lbnewsclient.Activity;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

import com.example.liubo.lbnewsclient.GetData.NetWorkUtil;
import com.example.liubo.lbnewsclient.GetData.XmlParse;
import com.example.liubo.lbnewsclient.R;

import java.io.InputStream;

public class MainActivity extends AppCompatActivity {

    private ListView mlistView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        mlistView = (ListView) findViewById(R.id.listView);


        // 子线程处理网络请求
        new Thread() {
            public void run() {
                getNetWorkSource();
            }

        }.start();

    }

    public void getNetWorkSource() {
        try {
            // 1.网络获取资源
            InputStream inputStream = NetWorkUtil.getResource("http://baidu.com");

            if (inputStream!=null){
                XmlParse.parseXml(inputStream);
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
