package com.example.yunmei.netease.splash.activity;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.Toast;

import com.example.yunmei.netease.R;
import com.example.yunmei.netease.splash.bean.Ads;
import com.example.yunmei.netease.splash.util.Constant;
import com.example.yunmei.netease.splash.util.JsonUtil;

import java.io.IOException;

import okhttp3.Call;
import okhttp3.Callback;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

/**
 * Created by yunmei on 2017/10/9.
 */

public class SplashActivity extends Activity {
    ImageView imageView;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        // 设置全屏
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_splash);

        imageView = (ImageView) findViewById(R.id.ads);
        // 添加广告图
        getAds();
    }
    public void click(View view){

        final OkHttpClient client = new OkHttpClient();

        Request request = new Request.Builder()
                .url(Constant.SPLASH_URL)
                .build();

        //开启一个异步请求
        client.newCall(request).enqueue(new Callback() {

            //请求失败
            @Override public void onFailure(Call call, IOException e) {
                e.printStackTrace();
            }

            //有响应
            @Override public void onResponse(Call call, Response response) throws IOException {
                if (!response.isSuccessful()) {
                    //请求失败
                }
                Toast.makeText(getApplicationContext(),"hahah", Toast.LENGTH_SHORT).show();

            }
        });
    }
    // 获取广告数据
    public void  getAds(){
        // 异步请求
        final OkHttpClient client = new OkHttpClient();

        Request request = new Request.Builder()
                .url(Constant.SPLASH_URL)
                .build();

        // 开启一个异步请求
        client.newCall(request).enqueue(new Callback() {

            // 请求失败
            @Override public void onFailure(Call call, IOException e) {
                e.printStackTrace();
            }

            // 有响应
            @Override public void onResponse(Call call, Response response) throws IOException {
                if (!response.isSuccessful()) {
                    // 请求失败
                    Toast.makeText(getApplicationContext(),"请求失败", Toast.LENGTH_SHORT).show();
                }

                // 获取到接口的数据
                String data = response.body().string();
                Ads ads =  JsonUtil.parseJson(data, Ads.class);

                if(null != ads ){
                    //请求成功
                    Log.i("JCSON",ads.toString());
                    Toast.makeText(getApplicationContext(),ads.toString(), Toast.LENGTH_SHORT).show();

//                    Intent intent = new Intent();
//                    intent.setClass(SplashActivity.this,DowloadImageService.class);
//                    intent.putExtra(DowloadImageService.ADS_DATE ,ads);
//                    startService(intent);

                }else{
                    //请求失败
                }
            }
        });

    }
}
