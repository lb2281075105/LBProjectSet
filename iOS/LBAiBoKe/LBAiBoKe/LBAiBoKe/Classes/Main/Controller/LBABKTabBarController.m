//
//  LBABKTabBarController.m
//  LBAiBoKe
//
//  Created by yunmei on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKTabBarController.h"
#import "LBABKNaviController.h"
#import "LBABKHomeController.h"
#import "LBABKClubController.h"
#import "LBABKMineController.h"
#import "LBABKShopController.h"
#import "LBABKClassifyController.h"

@interface LBABKTabBarController ()

@end

@implementation LBABKTabBarController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    [self addChildViewControllers];
}

- (void)addChildViewControllers{
    ///首页
    [self addChildViewController:[[LBABKHomeController alloc]init] withNormalImage:@"" withSelectImage:@"" withTitle:@"首页"];
    ///分类
    [self addChildViewController:[[LBABKClassifyController alloc]init] withNormalImage:@"" withSelectImage:@"" withTitle:@"分类"];
    ///会员天地
    [self addChildViewController:[[LBABKClubController alloc]init] withNormalImage:@"" withSelectImage:@"" withTitle:@"会员天地"];
    ///购物车
    [self addChildViewController:[[LBABKShopController alloc]init] withNormalImage:@"购物车" withSelectImage:@"购物车选中" withTitle:@"购物车"];
    ///我的
    [self addChildViewController:[[LBABKMineController alloc]init] withNormalImage:@"" withSelectImage:@"" withTitle:@"我的"];
}
///添加子控制器
- (void)addChildViewController:(UIViewController *)childController withNormalImage:(NSString *)normalImage withSelectImage:(NSString *)selectImage withTitle:(NSString *)title{
    
    childController.tabBarItem.image = [UIImage imageNamed:normalImage];
    childController.tabBarItem.selectedImage = [UIImage imageNamed:selectImage];
    childController.title = title;
    
    LBABKNaviController *nav = [[LBABKNaviController alloc]initWithRootViewController:childController];
    [self addChildViewController:nav];
}


@end
