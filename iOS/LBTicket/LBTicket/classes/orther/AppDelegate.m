//
//  AppDelegate.m
//  LBTicket
//
//  Created by liubo on 2017/9/13.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "AppDelegate.h"
#import "LBTTabBarController.h"
@interface AppDelegate ()

@end

@implementation AppDelegate


- (BOOL)application:(UIApplication *)application didFinishLaunchingWithOptions:(NSDictionary *)launchOptions {

    // 添加窗口
    self.window = [[UIWindow alloc]initWithFrame:CGRectMake(0, 0, [UIScreen cz_screenWidth], [UIScreen cz_screenHeight])];
    [self.window makeKeyAndVisible];
    self.window.backgroundColor = [UIColor whiteColor];
    self.window.rootViewController = [[LBTTabBarController alloc]init];
    return YES;
}






@end
