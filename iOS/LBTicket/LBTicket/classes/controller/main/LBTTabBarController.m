//
//  LBTTabBarController.m
//  LBTicket
//
//  Created by liubo on 2017/9/13.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBTTabBarController.h"
#import "LBTTabBar.h"
@interface LBTTabBarController ()<LBTTabBarDelegate>

@end

@implementation LBTTabBarController

- (void)viewDidLoad {
    [super viewDidLoad];
    // 更改系统自带的TabBar
    [self setUpTabBar];
}
// 更改系统自带的TabBar
- (void)setUpTabBar{

    LBTTabBar *lbtTabBar = [[LBTTabBar alloc]init];
    lbtTabBar.frame = self.tabBar.bounds;
    lbtTabBar.delegate = self;
    [self.tabBar addSubview:lbtTabBar];
    // 设置TabBar
    // [self setValue:lbtTabBar forKey:@"tabBar"];
    
    // 在TabBar添加5个按钮
    for (int i = 1; i<=5; i++) {
        NSString *normal = [NSString stringWithFormat:@"TabBar%d", i];
        NSString *selected = [normal stringByAppendingString:@"Sel"];
        [lbtTabBar addTabBarButton:normal selIcon:selected];
    }

}

- (void)tabBar:(LBTTabBar *)tabBar didSelectButtonFrom:(NSUInteger)from to:(NSUInteger)to
{
    self.selectedIndex = to;
}

@end
